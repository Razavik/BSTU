import Card from "./Card";
import style from "../data/modules/catalog.module.css";

import { Media } from "../data/Interfaces";

function Catalog({ media }: Media) {
	return (
		<div className={style.catalog}>
			{media.info.map((value, index) => (
				<Card key={index} path={media.path} {...value} />
			))}
		</div>
	);
}

export default Catalog;
