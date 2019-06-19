const initalState = {
    isCartOpen: false,
}

let newState;

export const appStateReducer = (state = initalState, action) => {
    switch (action.type) {
        case 'OPEN_CART':
            newState = Object.assign({},state,{
                isCartOpen: true
            })
            return newState;
            break;
        case 'CLOSE_CART':
            newState = Object.assign({},state,{
                isCartOpen: false 
            })
            return newState;
            break;
    
        default:
            return state
            break;
    }
}