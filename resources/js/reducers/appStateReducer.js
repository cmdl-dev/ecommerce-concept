const initalState = {
    isCartOpen: false,
    cartItems: [
        { name: "blue" },
        { name: "lemon" },
        { name: "orange" },
        { name: "green" },
        { name: "yellow" }
    ]
};

let newState;

export const appStateReducer = (state = initalState, action) => {
    console.log(action.type);
    switch (action.type) {
        case "OPEN_CART":
            newState = Object.assign({}, state, {
                isCartOpen: true
            });
            return newState;
            break;
        case "CLOSE_CART":
            newState = Object.assign({}, state, {
                isCartOpen: false
            });
            return newState;
            break;
        case "REMOVE_ITEM":
            state.cartItems.splice(action.index, 1);
            const newCartItems = state.cartItems;
            newState = Object.assign({}, state, {
                cartItems: newCartItems
            });
            return newState;
            break;
        default:
            return state;
            break;
    }
};
