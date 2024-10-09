import style from "./list.module.css";
import data from "./data.json";

type Props = {
	value: string;
	checked: boolean;
};

const List: React.FC<Props> = ({ value, checked }) => {
	interface Product {
		category: string;
		price: string;
		stocked: boolean;
		name: string;
	}

	const products: Array<Product> = data;
	let filtered: Array<Product> = [];
	if (value !== null) {
		filtered = products.filter(
			(elem) =>
				elem.name.toLowerCase().includes(value.toLowerCase()) &&
				(!checked || elem.stocked)
		);
	} else {
		filtered = products
			.filter((elem) => !checked || elem.stocked)
			.map((elem) => ({ ...elem }));
	}

	const productsFiltered = filtered.reduce((acc, elem) => {
		if (!acc[elem.category]) {
			acc[elem.category] = [];
		}
		acc[elem.category].push(
			<tr key={elem.name}>
				<td className={style.td}>{elem.name}</td>
				<td>{elem.price}</td>
			</tr>
		);
		return acc;
	}, {} as { [key: string]: JSX.Element[] });

	const renderedList: Array<JSX.Element> = [];

	for (let key in productsFiltered) {
		renderedList.push(
			<table>
				<tr className={style.title}>{key}</tr>
				{productsFiltered[key]}
				<br />
			</table>
		);
	}

	return (
		<>
			<table>
				<tr className={style.title}>
					<td className={style.td}>Name</td>
					<td>Price</td>
				</tr>
			</table>
			{renderedList}
		</>
	);
};

export default List;
