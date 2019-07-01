import React from "react";
import ReactDOM from "react-dom";
import { Provider } from "react-redux";
import { createStore } from "redux";
import allReducers from "./reducers/allReducers";
import CartBtn from "./components/CartBtn";
import CartPopup from "./components/CartPopup";
import AddToCart from "./components/AddToCart";
import ModalInfo from "./components/ModalInfo";

const store = createStore(allReducers);
/**
 * TODO: Add if statements to the renders
 * TODO: When a person adds something to their cart then the cart will open -> add the item -> close cart popup
 *  We are doing this for a better user experience
 */
// For the cart button
ReactDOM.render(
    <Provider store={store}>
        <CartBtn />
    </Provider>,
    document.getElementById("cart-btn")
);
// For the cart popup
const imgRoute = document
    .getElementById("cart-popup-root")
    .getAttribute("data-imgRoute");
ReactDOM.render(
    <Provider store={store}>
        <CartPopup imgRoute={imgRoute} />
    </Provider>,
    document.getElementById("cart-popup-root")
);

// For the add to cart
const addToCart = document.getElementById("productAddToCart");
if (addToCart) {
    const itemName = addToCart.getAttribute("data-name");
    const imgRoute = addToCart.getAttribute("data-imgRoute");
    const price = addToCart.getAttribute("data-price");
    ReactDOM.render(
        <Provider store={store}>
            <AddToCart itemName={itemName} price={price} imgRoute={imgRoute} />
        </Provider>,
        addToCart
    );
}

const modalCheckout = document.getElementById("modal-checkout");
console.log(modalCheckout);
if (modalCheckout) {
    ReactDOM.render(
        <Provider store={store}>
            <ModalInfo />
        </Provider>,
        modalCheckout
    );
}
