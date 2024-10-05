//Просто промис
const myPromise = new Promise((resolve, reject) => {
	setTimeout(() => {
		const randomNumber = Math.random();
		resolve(randomNumber);
	}, 3000);
});

myPromise.then((result) => {
	console.log("Сгенерированное число:", result);
});

// Функция, которая принимает параметр delay и возвращает промис
function generateNumber(delay) {
	return new Promise((resolve, reject) => {
		setTimeout(() => {
			const randomNumber = Math.random();
			resolve(randomNumber);
		}, delay);
	});
}

// Создаем массив из трех промисов
const promises = [
	generateNumber(3000),
	generateNumber(3000),
	generateNumber(3000),
];

// Используем Promise.all для ожидания выполнения всех промисов
Promise.all(promises)
	.then((results) => {
		console.log("Все числа сгенерированы:", results);
	})
	.catch((error) => {
		console.error("Ошибка:", error);
	});

let pr = new Promise((res, rej) => {
	rej("ku");
});

pr.then(() => console.log(1))
	.catch(() => console.log(2))
	.catch(() => console.log(3))
	.then(() => console.log(4))
	.then(() => console.log(5));

const promise = new Promise((resolve, reject) => {
	resolve(21);
});

promise
	.then((result) => {
		console.log(result);
		return result;
	})
	.then((result) => {
		console.log(result * 2);
	});

async function handlePromise() {
	let result = await Promise.resolve(21);
	console.log(result);
	result = await Promise.resolve(result * 2);
	console.log(result);
}

handlePromise();
