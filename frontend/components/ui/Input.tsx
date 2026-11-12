type InputProps = {
  label: string;
  name: string;
  type?: "text" | "email" | "number" | "date";
  placeholder?: string;
  required?: boolean;
};

export default function Input({
  label,
  name,
  type = "text",
  placeholder,
  required = false,
}: InputProps) {
  return (
    <div className="form-field">
      <label htmlFor={name}>{label}</label>
      <input
        id={name}
        name={name}
        type={type}
        placeholder={placeholder}
        required={required}
      />
    </div>
  );
}