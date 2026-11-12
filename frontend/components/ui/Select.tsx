type SelectOption = {
  value: string;
  label: string;
};

type SelectProps = {
  label: string;
  name: string;
  options: SelectOption[];
  placeholder?: string;
  required?: boolean;
};

export default function Select({
  label,
  name,
  options,
  placeholder = "Selecione uma opção",
  required = false,
}: SelectProps) {
  return (
    <div className="form-field">
      <label htmlFor={name}>{label}</label>
      <select id={name} name={name} defaultValue="" required={required}>
        <option value="" disabled={required}>
          {placeholder}
        </option>
        {options.map((option) => (
          <option key={option.value} value={option.value}>
            {option.label}
          </option>
        ))}
      </select>
    </div>
  );
}
