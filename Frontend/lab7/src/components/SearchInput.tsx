import style from "./search.module.css";

type Props = {
	placeholder: string;
	value: string;
	checked: boolean;
	onChange: (arg: string) => void;
	isChecked: (arg: boolean) => void;
};

const SearchComponents: React.FC<Props> = ({
	placeholder,
	value,
	checked,
	onChange,
	isChecked,
}) => {
	const valueChange = (e: React.ChangeEvent<HTMLInputElement>): void => {
		const { value } = e.target;
		onChange(value);
	};

	const checkedChange = (e: React.ChangeEvent<HTMLInputElement>): void => {
		const { checked } = e.target;
		isChecked(checked);
	};

	return (
		<>
			<input
				className={style.input}
				type="text"
				placeholder={placeholder}
				onChange={valueChange}
				value={value}
			/>
			<div className={style.checkbox}>
				<input
					type="checkbox"
					checked={checked}
					onChange={checkedChange}
				/>
				<label>Показывать только товары на складе</label>
			</div>
		</>
	);
};

export default SearchComponents;
