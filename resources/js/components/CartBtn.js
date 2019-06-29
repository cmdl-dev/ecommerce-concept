import React, { Component } from "react";
import { connect } from "react-redux";
import { openingCart } from "../actions/allActions";

class CartBtn extends Component {
    render() {
        return (
            <a href="#" className="cart-link" onClick={this.props.openingCart}>
                Cart
                {this.props.globalState.cartItems.length ? (
                    <span> {this.props.globalState.cartItems.length} </span>
                ) : (
                    ""
                )}
            </a>
        );
    }
}

const mapStateToProps = state => {
    console.log(state);
    return state;
};

export default connect(
    mapStateToProps,
    {
        openingCart
    }
)(CartBtn);
