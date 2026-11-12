type ButtonProps = {
  label: string;
  type?: "button" | "submit";
  disabled?: boolean;
};

export default function Button({
  label,
  type = "button",
  disabled = false,
}: ButtonProps) {
  return (
    <button className="button-primary" type={type} disabled={disabled}>
      {label}
    </button>
  );
}