var array = [
    { id: 1, name: 'Vasya', group: 10 },
    { id: 2, name: 'Ivan', group: 11 },
    { id: 3, name: 'Masha', group: 12 },
    { id: 4, name: 'Petya', group: 10 },
    { id: 5, name: 'Kira', group: 11 },
];
var car = {};
car.manufacturer = "manufacturer";
car.model = 'model';
var car1 = {};
car1.manufacturer = "manufacturer";
car1.model = 'model';
var car2 = {};
car2.manufacturer = "manufacturer";
car2.model = 'model';
var arrayCars = [{
        cars: [car1, car2]
    }];
var group = {
    students: [
        { id: 1, name: 'Vasya', group: 10, marks: [{ subject: 'Math', mark: 8, done: true }] },
        { id: 2, name: 'Ivan', group: 11, marks: [{ subject: 'English', mark: 9, done: true }] },
    ],
    studentsFilter: function (group) {
        return this.students.filter(function (student) { return student.group === group; });
    },
    marksFilter: function (mark) {
        return this.students.filter(function (student) {
            return student.marks.some(function (m) { return m.mark === mark; });
        });
    },
    deleteStudent: function (id) {
        this.students = this.students.filter(function (student) { return student.id !== id; });
    }
};
