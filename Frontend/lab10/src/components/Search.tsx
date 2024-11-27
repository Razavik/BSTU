import { useState } from "react";

import { DataInfo } from "../data/Interfaces";

import style from "../data/modules/search.module.css";

const API_KEY = "8e6e7391";

async function fetchMovies(title: string, type: string) {
	try {
		const response = await fetch(
			`https://www.omdbapi.com/?apikey=${API_KEY}&s=${encodeURIComponent(
				title
			)}&type=${type}`
		);
		const data = await response.json();

		if (data.Response === "True") {
			console.log("Результаты поиска:", data.Search);
			return data.Search;
		} else {
			console.error("Ошибка:", data.Error);
			return [];
		}
	} catch (error) {
		console.error("Ошибка запроса:", error);
		return [];
	}
}

interface Props {
	setMedia: (media: DataInfo[]) => void;
}

function Search({ setMedia }: Props) {
	const [value, setValue] = useState("");
	const [type, setType] = useState("all");

	function valueChange(e: React.ChangeEvent<HTMLInputElement>) {
		setValue(e.target.value);
	}

	function typeChange(e: React.ChangeEvent<HTMLInputElement>) {
		setType(e.target.id);
	}

	async function getData() {
		const results = await fetchMovies(value, type === "all" ? "" : type);
		setMedia(results);
	}

	return (
		<div className={style.search}>
			<div className={style.rightSearch}>
				<input
					className={style.inputSearch}
					type="text"
					onChange={valueChange}
					placeholder="Введите название фильма..."
				/>
				<div className={style.radio}>
					<div className="all">
						<input
							type="radio"
							id="all"
							checked={type === "all"}
							onChange={typeChange}
						/>
						<label htmlFor="all">Всё</label>
					</div>
					<div className="Movies">
						<input
							type="radio"
							id="movie"
							checked={type === "movie"}
							onChange={typeChange}
						/>
						<label htmlFor="movie">Фильмы</label>
					</div>
					<div className="Series">
						<input
							type="radio"
							id="series"
							checked={type === "series"}
							onChange={typeChange}
						/>
						<label htmlFor="series">Сериалы</label>
					</div>
				</div>
			</div>
			<button className={style.button} onClick={getData}>
				Поиск
			</button>
		</div>
	);
}

export default Search;
