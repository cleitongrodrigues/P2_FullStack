type InputProps = {
  label: string;
  name: string;
  type?: "text" | "email" | "number" | "date";
  placeholder?: string;
  required?: boolean;
  error?: string;
};

export default function Input({
  label,
  name,
  type = "text",
  placeholder,
  required = false,
  error,
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
        aria-invalid={Boolean(error)}
        aria-describedby={error ? `${name}-error` : undefined}
      />
      {error && (
        <p id={`${name}-error`} className="form-field-error" role="alert">
          {error}
        </p>
      )}
    </div>
  );
}