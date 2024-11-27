import { BrowserRouter as Router, Routes, Route } from "react-router-dom";

import Header from "./components/Header";

import Catalog from "./components/Catalog";
import Movies from "./data/categories/Movies.json";
import Cartoons from "./data/categories/Cartoons.json";
import Series from "./data/categories/Series.json";

import Footer from "./components/Footer";

function App() {
	return (
		<Router>
			<Header />
			<Routes>
				<Route path="/movies" element={<Catalog media={Movies} />} />
				<Route
					path="/cartoons"
					element={<Catalog media={Cartoons} />}
				/>
				<Route path="/series" element={<Catalog media={Series} />} />
			</Routes>
			<Footer />
		</Router>
	);
}

export default App;
