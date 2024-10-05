import React from "react";

type Props = {
	value: string;
	label: string;
	placeholder: string;
	type: string;
	onChange: (arg: string) => void;
};

const InputField: React.FC<Props> = ({
	value,
	label,
	placeholder,
	type,
	onChange,
}) => {
	const handleChange = (e: any): void => {
		const { value } = e.target;
		onChange(value);
	};

	return (
		<div>
			{label && <label>{label}</label>}
			<input
				type={type}
				value={value}
				placeholder={placeholder}
				onChange={handleChange}
			/>
		</div>
	);
};

export default InputField;
