"use strict";

var myPromise = new Promise(function (resolve, reject) {
  setTimeout(function () {
    var randomNumber = Math.random();
    resolve(randomNumber); // Результат промиса — сгенерированное число
  }, 3000);
});
myPromise.then(function (result) {
  console.log("Сгенерированное число:", result);
}); // Функция, которая принимает параметр delay и возвращает промис

function generateNumber(delay) {
  return new Promise(function (resolve, reject) {
    setTimeout(function () {
      var randomNumber = Math.random();
      resolve(randomNumber);
    }, delay);
  });
} // Создаем массив из трех промисов


var promises = [generateNumber(3000), generateNumber(3000), generateNumber(3000)]; // Используем Promise.all для ожидания выполнения всех промисов

Promise.all(promises).then(function (results) {
  console.log("Все числа сгенерированы:", results);
})["catch"](function (error) {
  console.error("Ошибка:", error);
});
var pr = new Promise(function (res, rej) {
  rej("ku");
});
pr.then(function () {
  return console.log(1);
})["catch"](function () {
  return console.log(2);
})["catch"](function () {
  return console.log(3);
}).then(function () {
  return console.log(4);
}).then(function () {
  return console.log(5);
});
var promise = new Promise(function (resolve, reject) {
  resolve(21); // Промис успешно выполнен с числом 21
});
promise.then(function (result) {
  console.log(result);
  return result;
}).then(function (result) {
  console.log(result * 2);
});

function handlePromise() {
  var result;
  return regeneratorRuntime.async(function handlePromise$(_context) {
    while (1) {
      switch (_context.prev = _context.next) {
        case 0:
          _context.next = 2;
          return regeneratorRuntime.awrap(Promise.resolve(21));

        case 2:
          result = _context.sent;
          console.log(result);
          console.log(result * 2); // Выводим 42

        case 5:
        case "end":
          return _context.stop();
      }
    }
  });
}

handlePromise();