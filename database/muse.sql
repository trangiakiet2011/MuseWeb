CREATE TABLE `cart` (
                        `cart_id` int(11) NOT NULL,
                        `user_id` int(11) NOT NULL,
                        `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `product` (
                           `item_id` int(11) NOT NULL,
                           `item_brand` varchar(200) NOT NULL,
                           `item_name` varchar(255) NOT NULL,
                           `item_price` double(10,2) NOT NULL,
                          `item_image` varchar(255) NOT NULL,
                          `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `user` (
                        `user_id` int(11) NOT NULL,
                        `first_name` varchar(100) NOT NULL,
                        `last_name` varchar(100) NOT NULL,
                        `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `wishlist` (
                            `cart_id` int(11) NOT NULL,
                            `user_id` int(11) NOT NULL,
                            `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Fender', 'Limited Edition Stratocaster', 999.00, './img/product/Fender/Limited Edition Stratocaster.png','2022-12-26 18:24:00'),
(2, 'Fender', 'American Vintage II Stratocaster', 2099.99, './img/product/Fender/American Vintage II Stratocaster.png','2022-12-26 18:24:00'),
(3, 'Fender', 'American Vintage II 1951 Telecaster', 2249.99, './img/product/Fender/American Vintage II 1951 Telecaster.png','2022-12-26 18:24:00'),
(4, 'Fender', 'American Vintage II 1972 Telecaster Thinline', 2099.99, './img/product/Fender/American Vintage II 1972 Telecaster Thinline.png','2022-12-26 18:24:00'),
(5, 'Fender', 'American Acoustasonic Jazzmaster', 1749.99, './img/product/Fender/American Acoustasonic Jazzmaster.png','2022-12-26 18:24:00'),
(6, 'Gibson', 'Les Paul Special', 1799.00, './img/product/Gibson/Les Paul Special.png','2022-12-26 18:24:00'),
(7, 'Gibson', 'Les Paul Modern', 2999.00, './img/product/Gibson/Les Paul Modern.png','2022-12-26 18:24:00'),
(8, 'Gibson', 'Les Paul Tribute', 1299.00, './img/product/Gibson/Les Paul Tribute.png','2022-12-26 18:24:00'),
(9, 'Gibson', 'Les Paul Special Tribute', 999.00, './img/product/Gibson/Les Paul Special Tribute.png','2022-12-26 18:24:00'),
(10, 'Gibson', 'Les Paul Studio', 1699.00, './img/product/Gibson/Les Paul Studio.png','2022-12-26 18:24:00');

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Kiet', 'Tran','2022-12-26 18:24:00'),
(2, 'Minh', 'Nguyen','2022-12-26 18:24:00'),
(2, 'Thao', 'Le','2022-12-26 18:24:00');



ALTER TABLE `cart`
    ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
    ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
    ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
    MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
    MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
    MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;