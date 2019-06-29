export const openingCart = () => {
    return {
        type: "OPEN_CART"
    };
};
export const closingCart = () => {
    return {
        type: "CLOSE_CART"
    };
};

export const removeItem = index => {
    return {
        type: "REMOVE_ITEM",
        index
    };
};
