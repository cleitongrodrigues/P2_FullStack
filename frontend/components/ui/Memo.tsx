  type MemoProps = {
  label: string;
  name: string;
  placeholder?: string;
  required?: boolean;
  rows?: number;
};

export default function Memo({
  label,
  name,
  placeholder,
  required = false,
  rows = 4,
}: MemoProps) {
  return (
    <div className="form-field">
      <label htmlFor={name}>{label}</label>
      <textarea
        id={name}
        name={name}
        placeholder={placeholder}
        required={required}
        rows={rows}
      />
    </div>
  );
}