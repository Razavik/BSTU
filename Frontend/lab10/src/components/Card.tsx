import style from "../data/modules/card.module.css";

import { DataInfo } from "../data/Interfaces";

function Card({ Title, Year, Type, Poster }: DataInfo) {
	return (
		<div className={style.card}>
			<div className={style.imageContainer}>
				<img src={Poster} alt={Title} />
			</div>
			<div className={style.info}>
				<h3 className={style.title}>{Title}</h3>
				<div>
					<p className={style.year}>{Year}</p>
					<p className={style.category}>{Type}</p>
				</div>
			</div>
		</div>
	);
}

export default Card;
