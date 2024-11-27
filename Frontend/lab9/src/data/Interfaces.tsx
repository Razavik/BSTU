export interface CardInfoWithPath {
	path: string;
	img: string;
	title: string;
	year: number;
	category: string;
}

interface CardInfo {
	img: string;
	title: string;
	year: number;
	category: string;
}

interface Category {
	path: string;
	info: CardInfo[];
}

export interface Media {
	media: Category;
}
