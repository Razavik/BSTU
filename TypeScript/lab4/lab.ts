//1
type Student = {
    id: number;
    name: string;
    group: number;
}

const array: Array<Student> = [
    { id: 1, name: 'Vasya', group: 10 },
    { id: 2, name: 'Ivan', group: 11 },
    { id: 3, name: 'Masha', group: 12 },
    { id: 4, name: 'Petya', group: 10 },
    { id: 5, name: 'Kira', group: 11 },
];

//2-3

type CarsType = {
    manufacturer?: string;
    model?: string;
}

let car: CarsType = {};
car.manufacturer = "manufacturer";
car.model = 'model';

const car1: CarsType = {};
car1.manufacturer = "manufacturer";
car1.model = 'model';

const car2: CarsType = {};
car2.manufacturer = "manufacturer";
car2.model = 'model';

type ArrayCarsType = {
    cars: Array<CarsType>;
}

const arrayCars: Array<ArrayCarsType> = [{
    cars: [car1, car2],
}];

//4

type MarkFilterType = 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10; // оценка от 1 до 10
type DoneType = boolean; // выполнено или нет
type GroupFilterType = 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12; // группы от 1 до 12

type MarkType = {
    subject: string;
    mark: MarkFilterType;
    done: DoneType;
}

type StudentType = {
    id: number;
    name: string;
    group: GroupFilterType;
    marks: Array<MarkType>;
}

type GroupType = {
    students: Array<StudentType>; // массив студентов типа StudentType
    studentsFilter: (group: GroupFilterType) => Array<StudentType>; // фильтр по группе
    marksFilter: (mark: MarkFilterType) => Array<StudentType>; // фильтр по оценке
    deleteStudent: (id: number) => void; // удалить студента по id
}

const group: GroupType = {
    students: [
        { id: 1, name: 'Vasya', group: 10, marks: [{ subject: 'Math', mark: 8, done: true }] },
        { id: 2, name: 'Ivan', group: 11, marks: [{ subject: 'English', mark: 9, done: true }] },
    ],

    studentsFilter: function (group: GroupFilterType) {
        return this.students.filter(student => student.group === group);
    },

    marksFilter: function (mark: MarkFilterType) {
        return this.students.filter(student =>
            student.marks.some(m => m.mark === mark)
        );
    },

    deleteStudent: function (id: number) {
        this.students = this.students.filter(student => student.id !== id);
    }
};