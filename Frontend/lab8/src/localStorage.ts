import { StateCounterType } from "./store/counterReducer";

export const loadState = () => {
    try {
        const serializedState = localStorage.getItem('state');

        return serializedState ? JSON.parse(serializedState) : null;
    } catch (err) {
        return null;
    }
};

export const saveState = (state: StateCounterType) => {
    try {
        const serializedState = JSON.stringify(state);

        localStorage.setItem('state', serializedState);
    } catch { }
};