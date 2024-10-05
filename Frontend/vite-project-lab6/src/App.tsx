import { useEffect, useState } from "react";
import "./App.css";
import List from "./components/ListProducts.tsx";
import SearchInputs from "./components/SearchInput.tsx";

function App() {
	const [value, setValue] = useState("");

	const [checked, setChecked] = useState(false);

	useEffect(() => {
		setValue(value);
	});

	return (
		<>
			<SearchInputs
				placeholder="Введите название товара"
				onChange={setValue}
				value={value}
				checked={checked}
				isChecked={setChecked}
			/>
			<List value={value} checked={checked} />
		</>
	);
}

export default App;
