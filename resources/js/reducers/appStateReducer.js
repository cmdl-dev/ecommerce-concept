import numeral from "numeral";
const initalState = {
    isCartOpen: false,
    cartItems: JSON.parse(localStorage.getItem("items")) || [],
    totalPrice: JSON.parse(localStorage.getItem("total-price")) || 0
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
        case "ADD_ITEM":
            newState = Object.assign({}, state, {
                cartItems: [...state.cartItems, action.item],
                totalPrice: numeral(state.totalPrice)
                    .add(action.item.price)
                    .format("0.00")
            });
            localStorage.setItem("items", JSON.stringify(newState.cartItems));
            localStorage.setItem(
                "total-price",
                JSON.stringify(newState.totalPrice)
            );
            return newState;
            break;
        case "REMOVE_ITEM":
            const removedItem = state.cartItems.splice(action.index, 1)[0];
            const newCartItems = state.cartItems;
            newState = Object.assign({}, state, {
                cartItems: newCartItems,
                totalPrice: numeral(state.totalPrice)
                    .subtract(removedItem.price)
                    .format("0.00")
            });
            localStorage.setItem("items", JSON.stringify(newState.cartItems));
            localStorage.setItem(
                "total-price",
                JSON.stringify(newState.totalPrice)
            );
            return newState;
            break;
        default:
            return state;
            break;
    }
};
