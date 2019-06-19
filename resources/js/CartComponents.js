import React from "react";
import ReactDOM from 'react-dom';
import { Provider } from 'react-redux';
import { createStore } from 'redux';
import allReducers from './reducers/allReducers';
import CartBtn  from './components/CartBtn';
import CartPopup from './components/CartPopup';


const store = createStore(allReducers)

ReactDOM.render(
    <Provider store={store}>
        <CartBtn />
    </Provider>,
    document.getElementById('cart-btn')
);
const imgRoute = document.getElementById('cart-popup-root').getAttribute('data-imgRoute')
ReactDOM.render(
    <Provider store={store}>
        <CartPopup imgRoute={imgRoute}/>
    </Provider>,
    document.getElementById('cart-popup-root')
);