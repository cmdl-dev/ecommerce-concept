import React, { Component } from "react";
import { connect } from "react-redux";
import { closingCart, removeItem } from "../actions/allActions";

class CartPopup extends Component {
    //
    handleRemoveItem = e => {
        console.log(e.target.getAttribute("data-index"));
        this.props.removeItem(e.target.getAttribute("data-index"));
    };
    componentDidUpdate() {
        if (this.props.globalState.isCartOpen) {
            const cartPopupElement = document.getElementById("cart-popup");
            const openCartEvent = event => {
                var clickedInside = cartPopupElement.contains(event.target);
                if (clickedInside) {
                    console.log("You clicked in side");
                } else {
                    this.props.closingCart();
                    document.removeEventListener("click", openCartEvent);
                    console.log("You cliked outside");
                }
            };
            document.addEventListener("click", openCartEvent);
        }
    }
    render() {
        return (
            <section
                id="cart-popup"
                className={this.props.globalState.isCartOpen ? "active" : ""}
            >
                <div>
                    <div className="cart-title">
                        <div className="title">My Cart</div>
                    </div>
                </div>
                <div className="cart-items">
                    <div className="item-container">
                        {this.props.globalState.cartItems.map((item, indx) => {
                            return (
                                <div key={indx} className="item">
                                    <img
                                        src={this.props.imgRoute}
                                        alt="Yeezy Boost"
                                    />
                                    <div className="delete-btn">
                                        <div
                                            data-index={indx}
                                            className="circle"
                                            onClick={this.handleRemoveItem}
                                        >
                                            X
                                        </div>
                                    </div>
                                </div>
                            );
                        })}
                    </div>
                </div>
                <div className="product-total">
                    <div className="title">Total</div>
                    <div className="number">
                        x{this.props.globalState.cartItems.length}
                    </div>
                </div>
                <div className="price-total">
                    <div className="title">Total</div>
                    <div className="number">
                        ${this.props.globalState.totalPrice}
                    </div>
                </div>
                <div className="checkout">
                    <div className="title">Checkout</div>
                    <span className="ti-shopping-cart" />
                </div>
            </section>
        );
    }
}

const mapStateToProps = state => {
    return state;
};

export default connect(
    mapStateToProps,
    {
        closingCart,
        removeItem
    }
)(CartPopup);
