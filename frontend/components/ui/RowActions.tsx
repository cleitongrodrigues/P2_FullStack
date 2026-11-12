"use client";

import Link from "next/link";
import { createPortal } from "react-dom";
import { useEffect, useId, useRef, useState } from "react";

type RowActionsProps = {
  label: string;
  editHref: string;
};

type MenuPosition = {
  top: number;
  left: number;
};

export default function RowActions({ label, editHref }: RowActionsProps) {
  const [isOpen, setIsOpen] = useState(false);
  const [position, setPosition] = useState<MenuPosition | null>(null);
  const triggerRef = useRef<HTMLButtonElement>(null);
  const menuRef = useRef<HTMLDivElement>(null);
  const menuId = useId();

  useEffect(() => {
    if (!isOpen) {
      return;
    }

    function updatePosition() {
      const trigger = triggerRef.current;
      const menu = menuRef.current;
      if (!trigger || !menu) {
        return;
      }

      const triggerRect = trigger.getBoundingClientRect();
      const menuRect = menu.getBoundingClientRect();
      const left = triggerRect.right + 6;
      const preferredTop =
        triggerRect.top + (triggerRect.height - menuRect.height) / 2;
      const maxTop = Math.max(8, window.innerHeight - menuRect.height - 8);
      const top = Math.min(Math.max(8, preferredTop), maxTop);

      setPosition({ top, left });
    }

    function handlePointerDown(event: PointerEvent) {
      const target = event.target as Node;
      if (
        !triggerRef.current?.contains(target) &&
        !menuRef.current?.contains(target)
      ) {
        setIsOpen(false);
      }
    }

    function handleKeyDown(event: KeyboardEvent) {
      if (event.key === "Escape") {
        setIsOpen(false);
        triggerRef.current?.focus();
      }
    }

    updatePosition();
    document.addEventListener("pointerdown", handlePointerDown);
    document.addEventListener("keydown", handleKeyDown);
    window.addEventListener("resize", updatePosition);
    window.addEventListener("scroll", updatePosition, true);

    return () => {
      document.removeEventListener("pointerdown", handlePointerDown);
      document.removeEventListener("keydown", handleKeyDown);
      window.removeEventListener("resize", updatePosition);
      window.removeEventListener("scroll", updatePosition, true);
    };
  }, [isOpen]);

  return (
    <div className="row-actions">
      <button
        ref={triggerRef}
        className="row-actions-trigger"
        type="button"
        aria-label={`Ações para ${label}`}
        aria-haspopup="menu"
        aria-expanded={isOpen}
        aria-controls={menuId}
        onClick={() => setIsOpen((open) => !open)}
      >
        <span aria-hidden="true">⋮</span>
      </button>
      {isOpen &&
        typeof document !== "undefined" &&
        createPortal(
          <div
            ref={menuRef}
            id={menuId}
            className="row-actions-menu"
            role="menu"
            style={{
              top: position?.top ?? 0,
              left: position?.left ?? 0,
              visibility: position ? "visible" : "hidden",
            }}
          >
            <Link href={editHref} role="menuitem" onClick={() => setIsOpen(false)}>
              Editar
            </Link>
            <button
              className="row-actions-remove"
              type="button"
              role="menuitem"
              onClick={() => setIsOpen(false)}
            >
              Remover
            </button>
          </div>,
          document.body,
        )}
    </div>
  );
}
