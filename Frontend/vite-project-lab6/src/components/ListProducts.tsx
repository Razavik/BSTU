import style from "./list.module.css";

type Props = {
	value: string;
	checked: boolean;
};

const List: React.FC<Props> = ({ value, checked }) => {
	const data: string = `[
        { "category": "Sporting Goods", "price": "$49.99", "stocked": true, "name": "Football" },
        { "category": "Sporting Goods", "price": "$9.99", "stocked": true, "name": "Baseball" },
        { "category": "Sporting Goods", "price": "$29.99", "stocked": false, "name": "Basketball" },
        { "category": "Sporting Goods", "price": "$19.99", "stocked": true, "name": "Tennis Racket" },
        { "category": "Electronics", "price": "$99.99", "stocked": true, "name": "iPod Touch" },
        { "category": "Electronics", "price": "$399.99", "stocked": false, "name": "iPhone 5" },
        { "category": "Electronics", "price": "$49.99", "stocked": true, "name": "Smart Watch" },
        { "category": "Electronics", "price": "$249.99", "stocked": false, "name": "Laptop" },
        { "category": "Home Appliances", "price": "$149.99", "stocked": true, "name": "Blender" },
        { "category": "Home Appliances", "price": "$499.99", "stocked": false, "name": "Washing Machine" },
        { "category": "Home Appliances", "price": "$79.99", "stocked": true, "name": "Microwave Oven" },
        { "category": "Furniture", "price": "$299.99", "stocked": true, "name": "Dining Table" },
        { "category": "Furniture", "price": "$89.99", "stocked": false, "name": "Office Chair" },
        { "category": "Furniture", "price": "$499.99", "stocked": true, "name": "Sofa" }
        ]
    `;

	interface Product {
		category: string;
		price: string;
		stocked: boolean;
		name: string;
	}

	const products: Array<Product> = JSON.parse(data);
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

	interface ProductsFiltered {
		[key: string]: Array<any>;
	}

	const productsFiltered: ProductsFiltered = {};

	filtered.forEach((elem) => {
		if (productsFiltered[elem.category] == null) {
			productsFiltered[elem.category] = [];
		}

		productsFiltered[elem.category].push(
			<tr>
				<td className={style.td}>{elem.name}</td>
				<td>{elem.price}</td>
			</tr>
		);
	});

	const List: Array<any> = [];

	for (let key in productsFiltered) {
		List.push(
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
			{List}
		</>
	);
};

export default List;
