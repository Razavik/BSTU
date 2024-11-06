import s from "./Counter.module.css";

type Props = {
	title: string;
	callBack: () => void;
	disabled?: boolean;
};

const Button: React.FC<Props> = ({ title, callBack, disabled }) => {
	const onClickHandler = (): void => {
		callBack();
	};

	return (
		<div>
			<button
				className={s.button}
				onClick={onClickHandler}
				disabled={disabled}
			>
				{title}
			</button>
		</div>
	);
};

export default Button;
