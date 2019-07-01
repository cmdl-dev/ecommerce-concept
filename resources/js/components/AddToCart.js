import React, { Component } from "react";
import { connect } from "react-redux";
import M from "materialize-css";
import { addItem } from "../actions/allActions";

class AddToCart extends Component {
    state = {
        itemName: "",
        imgRoute: "",
        selectedSize: "",
        price: 0,
        sizes: [
            4,
            4.5,
            5,
            5.5,
            6,
            6.5,
            7,
            7.5,
            8,
            8.5,
            9,
            9.5,
            10,
            10.5,
            11,
            11.5
        ]
    };
    componentDidMount() {
        var elems = document.querySelectorAll(".collapsible");
        M.Collapsible.init(elems, {});
        this.setState({
            itemName: this.props.itemName,
            imgRoute: this.props.imgRoute,
            price: this.props.price
        });
    }
    allSizes = () => {
        return this.state.sizes.map((size, key) => {
            return (
                <div
                    key={key}
                    className={`option ${
                        this.state.selectedSize === size ? "selected" : ""
                    }`}
                    onClick={this.clickedSize.bind(null, size)}
                >
                    {size}
                </div>
            );
        });
    };
    clickedSize = selectedSize => {
        this.setState({
            selectedSize
        });
    };
    clickedAddToCartBtn = () => {
        if (this.state.selectedSize !== "") {
            console.log(`We added size ${this.state.selectedSize} to the cart`);
            // check the database to verify that the item was successfully added to the users' cart
            const item = {
                name: this.state.itemName,
                imgRoute: this.state.imgRoute,
                size: this.state.selectedSize,
                price: this.state.price
            };

            this.props.addItem(item);
        } else {
            M.Toast.dismissAll();
            /**
             * FIXME: The round class is not making it round
             */
            M.toast({ html: "Please selected a size", classes: "round" });
            // toast here
        }
    };
    render() {
        return (
            <div className="add-to-cart">
                <div className="detail-section">
                    <div className="detail">
                        <input
                            type="checkbox"
                            className="toggle"
                            id="size-dropdown"
                        />
                        <label
                            className="title size-title"
                            htmlFor="size-dropdown"
                        >
                            Size
                        </label>
                        <div className="content">
                            <div className="size">{this.allSizes()}</div>
                        </div>
                    </div>
                </div>
                <div className="btn-area">
                    <div className="button" onClick={this.clickedAddToCartBtn}>
                        Add To Cart
                    </div>
                </div>
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header">Delivery</div>
                        <div class="collapsible-body">
                            <p>
                                Overnight delivery by 8 a.m. to more ZIP Codes
                                than FedEx Priority handling at every stage of
                                transit for added reliability Up to three
                                delivery attempts at no cost for added
                                flexibility
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header">Refund Policy</div>
                        <div class="collapsible-body">
                            <p>
                                We accept returns for store credit, within 3
                                business days of receipt. Items must be tagged
                                and in new/unworn condition. Read more here.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
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
        addItem
    }
)(AddToCart);
