import style from "../data/modules/card.module.css";

import { CardInfoWithPath } from "../data/Interfaces";

function Card({ path, img, title, year, category }: CardInfoWithPath) {
	return (
		<div className={style.card}>
			<div className={style.imageContainer}>
				<img src={path + img} alt={title} />
			</div>
			<div className={style.info}>
				<h3 className={style.title}>{title}</h3>
				<div>
					<p className={style.year}>{year}</p>
					<p className={style.category}>{category}</p>
				</div>
			</div>
		</div>
	);
}

export default Card;
