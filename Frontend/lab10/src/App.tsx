import { useState } from "react";

import Search from "./components/Search";

import Catalog from "./components/Catalog";

import Footer from "./components/Footer";

import { DataInfo } from "./data/Interfaces";

function App() {
	const [data, setData] = useState<DataInfo[]>([]);

	return (
		<>
			<Search setMedia={setData} />
			<Catalog data={data} />
			<Footer />
		</>
	);
}

export default App;
