import { useEffect, useState } from "react";
import "./App.css";
import Tick from "./components/Tick.tsx";

function App() {
	const [userName, setUserName] = useState<string>("Daniil");

	const [time, setTime] = useState<string>(new Date().toLocaleTimeString());

	const Clock = (): void => {
		setTime(new Date().toLocaleTimeString());
	};

	useEffect((): void => {
		setInterval(Clock, 1000);
	});

	return (
		<>
			<Tick
				text={"How are you?"}
				name={userName}
				clickHandler={setUserName}
				currentTime={time}
			/>
		</>
	);
}

export default App;
