import { loadState } from "../localStorage";

enum Action {
    RESET = 'RESET',
    INCREMENT = 'INCREMENT'
}

export type StateCounterType = {
    value: number;
}

type ActionType = ReturnType<typeof incrementCounterAC> | ReturnType<typeof resetCounterAC>;

export const incrementCounterAC = (value: number) => ({ type: Action.INCREMENT, value } as const);
export const resetCounterAC = () => ({ type: Action.RESET } as const);

export const counterReducer = (state: StateCounterType = loadState(), action: ActionType): StateCounterType => {
    switch (action.type) {
        case Action.INCREMENT:
            return { ...state, value: action.value };
        case Action.RESET:
            return { ...state, value: 0 };
        default:
            return state;
    }
}