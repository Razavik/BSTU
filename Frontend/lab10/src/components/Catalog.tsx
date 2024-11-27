import Card from "./Card";
import style from "../data/modules/catalog.module.css";

import { DataInfo } from "../data/Interfaces";

interface Data {
	data: DataInfo[];
}

function Catalog({ data }: Data) {
	data.splice(6);

	return (
		<div className={style.catalog}>
			{data.map((value, index) => (
				<Card key={index} {...value} />
			))}
		</div>
	);
}

export default Catalog;
