import style from "./tick.module.css";
import Button from "./Button";
import InputField from "./InputField";
import { useState } from "react";

type Props = {
	text: string;
	name: string;
	currentTime: string;
	clickHandler: (arg: string) => void;
};

const Tick: React.FC<Props> = ({ text, name, currentTime, clickHandler }) => {
	const onClickHandler = (value: string): void => {
		clickHandler(value);
	};
	const initialValue: string = "Haah";
	let [surname, setSurname] = useState(initialValue);

	return (
		<>
			<div>
				<h1 className={style.text}>{text}</h1>
				<h1 className={style.name}>{name}</h1>
				<h2>Сейчас {currentTime}.</h2>
				<Button
					callBack={() => onClickHandler(surname)}
					title={"Клик"}
				/>
				<InputField
					value={surname}
					onChange={setSurname}
					label={"Введите имя"}
					placeholder={"Введите имя"}
					type={"text"}
				></InputField>
			</div>
		</>
	);
};

export default Tick;
