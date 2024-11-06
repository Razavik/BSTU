export type SquareValue = "X" | "O" | null;

interface SquareProps {
	value: SquareValue;
	onSquareClick: () => void;
}

const Square: React.FC<SquareProps> = ({ value, onSquareClick }) => {
	return (
		<button className="square" onClick={onSquareClick}>
			{value}
		</button>
	);
};

export default Square;
