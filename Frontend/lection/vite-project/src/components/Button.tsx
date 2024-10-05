type Props = {
	title: string;
	callBack: () => void;
	disabled?: boolean;
};

const Button: React.FC<Props> = ({ title, callBack, disabled }) => {
	const onClickHandler = () => {
		callBack();
	};

	return (
		<div>
			<button onClick={onClickHandler} disabled={disabled}>
				{title}
			</button>
		</div>
	);
};

export default Button;
