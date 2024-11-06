import { useState } from "react";
import Button from "./Button";
import s from "./Counter.module.css";

const Counter = () => {
	let incrementBtnTitle: string = "+";
	let resetBtnTitle: string = "C";

	let [value, setValue] = useState<number>(0);
	let disabledIncrementBtn: boolean = value >= 5;
	let disabledResetBtn: boolean = value === 0;
	let valueClassName: any = disabledIncrementBtn ? s.maxValue : s.value;

	const increment = (): void => {
		setValue(++value);
	};

	const reset = (): void => {
		setValue(0);
	};

	return (
		<div className={s.counter}>
			<div className={valueClassName}>
				<span>{value}</span>
			</div>
			<div className={s.buttons}>
				<Button
					title={incrementBtnTitle}
					callBack={increment}
					disabled={disabledIncrementBtn}
				/>
				<Button
					title={resetBtnTitle}
					callBack={reset}
					disabled={disabledResetBtn}
				/>
			</div>
		</div>
	);
};

export default Counter;
