import { combineReducers, legacy_createStore } from "redux";
import { saveState } from "../localStorage";
import { counterReducer } from "./counterReducer";

const rootReducer = combineReducers({
    counter: counterReducer,
});

export const store = legacy_createStore(rootReducer);

export type AppRootStateType = ReturnType<typeof rootReducer>;
