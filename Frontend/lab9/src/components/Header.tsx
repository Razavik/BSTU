import { Link } from "react-router-dom";
import style from "../data/modules/nav.module.css";

function Header() {
	return (
		<nav className={style.nav}>
			<ul>
				<li className={style.menuItem}>
					<Link to="/movies">Фильмы</Link>
				</li>
				<li className={style.menuItem}>
					<Link to="/cartoons">Мультфильмы</Link>
				</li>
				<li className={style.menuItem}>
					<Link to="/series">Сериалы</Link>
				</li>
			</ul>
		</nav>
	);
}

export default Header;
