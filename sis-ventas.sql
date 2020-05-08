--
-- Estructura de tabla para la tabla `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha_orden` date DEFAULT NULL,
  `fecha_llegada` date DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carts`
--

INSERT INTO `carts` (`id`, `fecha_orden`, `fecha_llegada`, `estado`, `user_id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Pendiente', 1, '2020-04-13 21:15:45', '2020-04-14 06:29:55'),
(2, NULL, NULL, 'Activo', 2, '2020-04-14 00:34:11', '2020-04-14 00:34:11'),
(3, NULL, NULL, 'Activo', 1, '2020-04-14 06:29:55', '2020-04-14 06:29:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart_datails`
--

CREATE TABLE `cart_datails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` bigint(20) UNSIGNED NOT NULL,
  `descuento` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `cart_id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cart_datails`
--

INSERT INTO `cart_datails` (`id`, `cantidad`, `descuento`, `cart_id`, `producto_id`, `created_at`, `updated_at`) VALUES
(4, 7, 0, 2, 1, '2020-04-14 00:34:32', '2020-04-14 00:34:32'),
(8, 10, 0, 1, 1, '2020-04-14 00:43:30', '2020-04-14 00:43:30'),
(14, 5, 0, 1, 2, '2020-04-14 06:09:52', '2020-04-14 06:09:52'),
(15, 12, 0, 1, 2, '2020-04-14 06:10:12', '2020-04-14 06:10:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `nombre`, `descripcion`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Voluptatem', 'Ex omnis tempore fugiat qui expedita repudiandae ut.', NULL, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(2, 'Earum', 'Ea eligendi et unde quod qui in distinctio vel nobis molestias et quos minima.', NULL, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(3, 'Reprehenderit', 'Et explicabo non vel minus aperiam ab aut et aliquid earum alias.', NULL, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(4, 'Voluptatem', 'Voluptates reprehenderit neque doloribus laboriosam consectetur illum.', NULL, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(5, 'Dolor', 'Distinctio est eos omnis quos provident esse neque illum eum accusamus necessitatibus et.', NULL, '2020-04-13 21:15:02', '2020-04-13 21:15:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(65, '2014_10_12_000000_create_users_table', 1),
(66, '2014_10_12_100000_create_password_resets_table', 1),
(67, '2019_08_19_000000_create_failed_jobs_table', 1),
(68, '2020_04_04_210645_create_categories_table', 1),
(69, '2020_04_04_212052_create_productos_table', 1),
(70, '2020_04_05_024252_create_producto_imagens_table', 1),
(71, '2020_04_10_225045_create_carts_table', 1),
(72, '2020_04_10_225141_create_cart_datails_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_descripcion` text COLLATE utf8mb4_unicode_ci,
  `precio` double(8,2) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `long_descripcion`, `precio`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Adipisci aliquam illo ipsa', 'Exercitationem et esse maiores voluptas voluptatem labore explicabo maiores est voluptatibus excepturi culpa eum.', 'Dolorem eveniet possimus sit iste. Libero esse blanditiis et doloremque rerum animi. Vel ratione eveniet omnis laudantium.', 377.41, 1, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(2, 'Laboriosam repellendus quis', 'Sunt reiciendis quo enim sed et repellendus quos magni illo necessitatibus vel.', 'Alias vitae soluta nam. Magnam corporis eius at harum. Sit expedita ut voluptatem. Cum quam ut consequatur aperiam numquam enim quidem officia.', 632.91, 1, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(3, 'Esse et dolor', 'Voluptas similique impedit adipisci dolorem aut sint atque consequuntur vel pariatur.', 'Natus sapiente illum magni rem saepe libero qui. Dolore necessitatibus delectus omnis. Fuga provident voluptate quod vel et. Veritatis ea quia consectetur et itaque.', 583.17, 1, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(4, 'Quaerat blanditiis facilis', 'Provident dolores adipisci dicta et non sed nisi cum aut itaque doloribus.', 'Odit voluptatem omnis est ratione corrupti ut accusantium ut. Et porro veniam est quo rerum illo. Hic libero aut sed. Rerum fugit officia eaque ullam consectetur saepe dignissimos dignissimos.', 490.09, 1, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(5, 'Asperiores quidem dolores soluta', 'Hic placeat ipsum aperiam eaque sed ut consectetur molestias aut.', 'Cupiditate praesentium modi fugiat excepturi voluptas modi. Voluptates doloribus molestias quisquam nesciunt. Occaecati nihil eaque consequatur itaque assumenda. Ipsam omnis quae quam sit.', 143.64, 1, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(6, 'Nostrum alias aut', 'Quia ullam voluptatibus ut et quia temporibus atque nulla rerum.', 'Natus quia repellendus quis. Dolores officia laboriosam ipsa. Ad eos quod suscipit incidunt. Impedit illum et nulla repellendus fugiat et quos.', 569.48, 1, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(7, 'Eos ea deserunt ea', 'Temporibus sit explicabo necessitatibus quibusdam fuga commodi accusamus omnis est et.', 'Eum error qui autem et ex iste quos. Minima ut iure incidunt autem. Cupiditate esse nisi et fuga aspernatur. Et magnam rerum quae voluptatem.', 57.67, 1, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(8, 'Consequatur deserunt ea quae', 'Reiciendis corrupti quia ex maxime suscipit cupiditate eveniet sunt.', 'Veritatis aut quia in deleniti quam. Odio in consequatur error sequi et sed numquam. Sit id earum pariatur et saepe.', 707.70, 1, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(9, 'Pariatur rerum', 'Velit eum explicabo nemo occaecati non et iure.', 'Doloribus ab et ut id. Aut et aspernatur ut aut a. Sed consequatur earum est delectus.', 91.28, 1, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(10, 'Illum blanditiis sequi', 'Ut nihil fugiat inventore est ipsam nihil inventore natus rerum culpa.', 'Veniam qui odio quas. Enim et nulla exercitationem quibusdam ut quos.', 29.43, 1, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(11, 'Nam adipisci', 'Ea vel eum est omnis sint repudiandae odit sunt nihil accusamus.', 'Voluptates corporis eligendi vel provident. Qui non esse repellat consequatur voluptas. Et culpa delectus quia sit quas corrupti. Voluptas impedit qui repellat maiores necessitatibus.', 280.73, 1, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(12, 'Quae voluptatem voluptatem', 'Mollitia harum aut minus asperiores dolorum laborum nulla laudantium labore laborum doloribus dolores laudantium.', 'Nihil qui voluptas nulla qui doloremque autem itaque nulla. Cum nam animi iure nihil numquam laudantium reiciendis. Aut porro delectus quos laborum quos autem. Soluta velit enim eos velit quasi.', 335.24, 1, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(13, 'Suscipit quia rerum', 'In mollitia debitis laboriosam explicabo molestias consequuntur ea est hic aperiam est ea.', 'Nihil rerum et quos aut. A quisquam rem qui sint et id nobis. Sint dicta aut ipsum et. Molestiae et est suscipit eligendi repudiandae sed praesentium.', 350.66, 1, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(14, 'Nihil fuga voluptatum nihil', 'Aliquam sed sint voluptatibus optio laboriosam dicta fuga harum.', 'Consectetur consequatur maxime rerum quo voluptatibus exercitationem. Sapiente ea ut voluptatem ratione molestiae voluptatem iusto. Dolore eius at cupiditate eligendi pariatur.', 116.27, 1, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(15, 'Magni laborum incidunt cumque', 'Quia voluptatibus deserunt commodi eos ipsa atque maiores sunt et est id velit.', 'Officiis a sed corporis vel sed nulla. Voluptatem repellendus sint nesciunt. Ea libero dolore doloribus enim facilis ea dolorem.', 825.71, 1, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(16, 'Voluptas officiis error numquam', 'Sit debitis animi quo sapiente consectetur numquam sed.', 'Quibusdam non ut accusantium et voluptates. Tenetur minus sunt architecto quaerat ut numquam. Incidunt aperiam voluptatem ut illum sit. Eveniet ex dolores dolore vel nesciunt.', 15.94, 1, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(17, 'Saepe iusto modi', 'Numquam iusto sed praesentium nesciunt distinctio hic voluptatem quisquam officiis corporis assumenda ducimus.', 'Et totam ullam praesentium ex deleniti. Voluptas sit distinctio reprehenderit omnis ducimus. Ut velit repudiandae qui nulla aut corrupti.', 826.98, 1, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(18, 'Molestiae doloremque et et', 'Ullam eligendi facilis nihil aut quam corrupti enim qui numquam nesciunt aut.', 'Maxime ducimus eos provident eum non suscipit. Repellendus et nulla occaecati ullam sit. Quis est qui sit soluta voluptatem magnam quaerat. Eos quis minima suscipit omnis similique.', 482.79, 1, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(19, 'Inventore sunt illum', 'Rerum nesciunt unde reprehenderit ullam fugit quia veniam quo.', 'Deserunt ducimus aut hic omnis. Recusandae id assumenda ut. Nihil nam quo voluptas animi. Ea repellat molestiae tempora aut.', 316.84, 1, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(20, 'Numquam harum modi', 'Officiis ut dicta veritatis tempore possimus et quis voluptas.', 'Voluptas et optio aut eos consectetur. Quia dolores non perspiciatis natus rem omnis facere. Excepturi magnam sed quia illo non et.', 186.14, 1, '2020-04-13 21:15:02', '2020-04-13 21:15:02'),
(21, 'Fugiat qui doloribus asperiores', 'Et dolores sunt voluptatibus corrupti soluta vel nulla voluptas.', 'Et est natus placeat voluptas excepturi dolore tempora. Asperiores earum ea quidem nihil aut. Qui temporibus repellendus suscipit ut ipsa ipsa.', 479.95, 2, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(22, 'Sunt odit est', 'Tempore modi nihil voluptas maxime non est rerum soluta a autem.', 'Sapiente est ullam quo consequatur quod in ut. Voluptatem id quia laborum vel dolores explicabo asperiores. A magni dolor praesentium ratione.', 113.45, 2, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(23, 'Voluptatem rerum excepturi', 'Suscipit et reprehenderit corrupti numquam error et libero eum aspernatur ratione qui id natus.', 'Labore et est dolor sint itaque. Quia corporis dignissimos accusamus qui autem esse sed.', 656.15, 2, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(24, 'Et dolorum et', 'Nisi placeat voluptatem consequatur eaque omnis aliquam non laborum maxime.', 'Ipsa reprehenderit sed et reprehenderit rem dolor. Repellat necessitatibus laudantium autem assumenda voluptatum impedit. Quisquam dolorem odio voluptatem et itaque at.', 881.81, 2, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(25, 'Nobis quis asperiores reiciendis', 'Facere sint voluptates commodi dolores ipsum non.', 'Voluptas rerum tempora voluptatibus et. Ipsa expedita quo consectetur repudiandae modi expedita debitis consectetur. Aperiam unde est et commodi.', 508.12, 2, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(26, 'Nihil quia eos magni', 'Quas perferendis voluptate vitae molestiae illum consequatur ut nesciunt distinctio aliquid eum.', 'Et provident quaerat expedita eos quia. Est ut harum adipisci id est atque qui. Aut voluptatem inventore architecto. Inventore ab porro corporis porro quis error.', 62.85, 2, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(27, 'Aut ex occaecati', 'Sit eos quam quia quasi est neque qui.', 'Quis voluptate consectetur ratione tenetur eum accusamus et. Sed veritatis impedit blanditiis perferendis eveniet et non voluptas. Et aspernatur quibusdam ad aperiam.', 22.76, 2, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(28, 'Voluptas dolores', 'Illo velit nihil exercitationem saepe rem ut delectus repellat cumque temporibus est a et.', 'Commodi dolore recusandae id. Quo in saepe occaecati vero. Omnis maiores rerum eaque voluptatibus eum quos. Ipsa commodi voluptas dolorum quod fuga.', 173.12, 2, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(29, 'Quam aut itaque veritatis', 'Aut ea dolor consequatur necessitatibus omnis eius sed ut saepe cumque laborum.', 'Cumque dolorum quas minus tempora. Reprehenderit voluptatibus aut expedita natus modi. Atque est nulla dolor repudiandae.', 294.07, 2, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(30, 'Est cupiditate', 'Minima officia ad eum quasi nihil aperiam totam dicta earum quia sapiente adipisci placeat.', 'Sed voluptatem veritatis sit fugit voluptatem consequatur ipsam. Eum ut ut qui blanditiis ea enim. Molestias quam mollitia aut ab. Beatae natus molestiae ipsum officiis.', 556.34, 2, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(31, 'Officia delectus sed', 'Provident qui ipsum cupiditate soluta amet in earum voluptatum.', 'Necessitatibus debitis libero minus vero molestias tenetur sit. Delectus consequuntur occaecati quos qui hic. Dolores et et soluta fuga dolor ratione iusto.', 95.51, 2, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(32, 'Quibusdam esse magnam', 'Possimus temporibus reprehenderit minus saepe ipsa nisi quo porro aspernatur neque soluta voluptas iste.', 'Nihil architecto non perspiciatis nulla repellendus iure. Vitae exercitationem eos placeat ut magnam quos assumenda soluta. Cumque ducimus expedita quidem perferendis.', 393.17, 2, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(33, 'Odio reiciendis labore', 'Magnam numquam laboriosam libero sint minima et a omnis.', 'Blanditiis voluptas commodi libero omnis qui. Reprehenderit tempore ut omnis officiis. Aut voluptas minima quam et similique fuga. Suscipit incidunt possimus distinctio aut ut autem nisi sapiente.', 545.85, 2, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(34, 'Blanditiis aut cupiditate', 'Nam modi non voluptatem autem rerum omnis asperiores impedit tenetur.', 'Velit id enim molestiae perspiciatis quos ex. Ut accusamus inventore rerum dignissimos. Aliquam ipsa enim illo ipsa. Dolorem inventore dignissimos eos ipsum facilis.', 188.47, 2, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(35, 'Eum ab ducimus et', 'Voluptas qui dolorem voluptatem dolorem rem fugiat officiis velit voluptas ducimus.', 'Et quis quos debitis voluptatem sunt molestias fugit. Quibusdam non eos earum omnis. Unde commodi hic ut et. Alias eum et non culpa tenetur perferendis.', 512.40, 2, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(36, 'Molestias et ipsa', 'Sed non assumenda ipsam doloremque ducimus voluptatum corrupti.', 'Autem minus delectus blanditiis. Praesentium quisquam et dignissimos amet dolores ea. Non quos voluptatibus ea ut asperiores sit aut iusto.', 493.28, 2, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(37, 'Dolor quia vel iste', 'Reiciendis animi dolores consequuntur eum maiores qui sit repellat.', 'Dolores nihil voluptatem qui labore. Itaque dignissimos enim harum quidem tempora. Quo veritatis quae explicabo ut ratione eligendi. Ipsam voluptatum repellendus qui eos vel soluta ipsa.', 819.68, 2, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(38, 'Aut quia et', 'Blanditiis similique saepe qui reiciendis iure rem.', 'Sit est hic qui corporis. Dolores et quia vero quam molestiae quidem. Sint voluptatem corporis debitis magnam. Laudantium cum sint laudantium qui rem totam voluptas. Delectus tenetur voluptas dicta.', 945.86, 2, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(39, 'Qui ipsa minus soluta', 'Sequi voluptatem aspernatur aperiam ea deserunt debitis ut rem.', 'Voluptas et quod sit ratione quibusdam libero et. Optio repudiandae nisi enim consectetur. Odit tempore et a voluptate. Quas voluptatem unde nobis qui fugiat est. Odit distinctio sunt vel quo.', 976.70, 2, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(40, 'Illum ut', 'Delectus consectetur commodi qui molestiae eum numquam facere et voluptates voluptate.', 'Autem dignissimos ut quos repellendus voluptatum. Optio facere autem magni voluptatem quibusdam ducimus quod aliquid. Quam est voluptas facilis vitae.', 527.10, 2, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(41, 'Id odit', 'Debitis est consequatur earum occaecati dignissimos cumque.', 'Cum qui assumenda alias ducimus quasi ea. Voluptate doloribus nulla et beatae distinctio. Enim repellat aut qui explicabo eum.', 250.67, 3, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(42, 'Suscipit ex praesentium ut', 'Et tempore et nobis ut occaecati omnis iusto aut non esse et aliquid.', 'Placeat quidem pariatur aut aliquam qui modi nostrum est. Explicabo vero rerum totam deserunt ex sunt maxime. A inventore ratione debitis nihil eligendi.', 665.51, 3, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(43, 'Dolore facilis voluptatem ut', 'Quis voluptas omnis sequi enim repellat tenetur quis expedita aut.', 'Tempore laborum itaque quia et aspernatur id et cupiditate. Consequatur voluptatem fugit ea assumenda fugiat ullam. Sequi provident ex sit natus ipsa et. Amet unde ipsum ea sunt.', 755.08, 3, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(44, 'Est perspiciatis quia', 'Fuga maiores laborum ex et dolore ipsum corrupti nobis deserunt.', 'Vero nostrum hic alias aut veritatis esse. In voluptas dicta nihil et. Non dolorem ipsam nihil eum.', 334.64, 3, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(45, 'Ad et debitis', 'Voluptatem id sed corrupti atque illum natus voluptatem blanditiis perferendis ducimus.', 'Veniam ut optio quam quas. Molestiae excepturi ut quidem eveniet. Voluptas officiis recusandae voluptatem eius.', 837.96, 3, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(46, 'Aut et rerum soluta', 'Autem error quidem quam et ab qui earum recusandae.', 'Sed distinctio sed minima dolor. Molestiae sequi praesentium consequatur nobis praesentium laudantium rerum.', 109.71, 3, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(47, 'Hic sint expedita', 'Et accusamus qui aliquid dolore et illum non.', 'Fugiat laudantium occaecati et eos non autem. Suscipit ea eaque voluptas commodi consequuntur. Et optio similique et repellendus sed nulla officiis. Rem dolores praesentium in magni.', 879.05, 3, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(48, 'Voluptatem repudiandae alias omnis', 'Quod pariatur nulla vitae tempore ut magnam aperiam non impedit dignissimos.', 'Necessitatibus laudantium eos nihil et deserunt ipsum dolorum. Necessitatibus sapiente eius facilis tempore unde. Aut libero est voluptatem id non.', 770.84, 3, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(49, 'Natus et praesentium velit', 'Rerum nulla blanditiis quasi debitis velit aliquam excepturi ad sint fugit eius.', 'Laborum commodi ut nihil itaque placeat accusamus. Eos hic omnis eius culpa. Ut consequuntur labore dolorem consequatur recusandae qui.', 93.69, 3, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(50, 'Aliquam dolores quia sint', 'Natus provident dolor ut aspernatur quo beatae minima corrupti repellendus deserunt repellat aut.', 'Dolore eos qui ut laborum vero ut vel. Qui dolor molestias tenetur. Repellendus nihil omnis dicta.', 526.51, 3, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(51, 'Esse doloremque praesentium error ea', 'Quia iusto eligendi ipsa molestias cumque accusamus qui aperiam et quae aut perspiciatis est.', 'Vel facere et ut corrupti nemo quis sit. Quaerat tempore debitis eius sequi et. Rerum itaque quibusdam consequatur adipisci. Et voluptatem modi aliquam blanditiis voluptatum sunt.', 282.36, 3, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(52, 'Quam quod reiciendis', 'Id quaerat deserunt unde rem est nostrum et quasi dolorem cumque.', 'Occaecati sunt id dolores molestiae at. Perspiciatis aperiam officiis tenetur cum delectus. Quasi velit ducimus modi voluptate.', 653.47, 3, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(53, 'Sed est fugit eius', 'Dolore ea earum quo expedita laboriosam ut repellendus fugit eum occaecati quis praesentium.', 'Quo tenetur quae dolore consectetur. Consequatur impedit aut aperiam beatae quo aut dolore cum. Sit eaque laborum tempora.', 678.07, 3, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(54, 'In mollitia ullam', 'Ut quia maiores ea ab ipsum sapiente vero.', 'Distinctio debitis voluptas consequatur autem molestiae. Et ipsam enim sit quia ut. Qui temporibus voluptas exercitationem et eius et aspernatur. Ipsa magni laborum dolor et sit.', 499.59, 3, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(55, 'Veniam quaerat dolor ut', 'Dolor eos ut vitae sed vitae facilis ut.', 'Iusto veniam totam perspiciatis recusandae non est ipsa. Qui dignissimos deleniti ut delectus pariatur et et. Blanditiis facere accusamus non explicabo.', 524.47, 3, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(56, 'Id optio velit debitis', 'Iure eligendi nulla voluptatibus eum quae vel qui.', 'Sed voluptatibus consequatur nihil rerum. Aut aliquam nesciunt est fugit. Sed rerum atque expedita excepturi suscipit est sed incidunt. Velit culpa voluptatem nobis et laborum alias provident.', 957.06, 3, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(57, 'Cupiditate molestiae vel non', 'Nulla iusto culpa nam voluptates aliquid deserunt sed voluptate molestiae voluptates.', 'Doloremque ut aut vel sapiente est quibusdam eum. Sequi voluptas et rerum deserunt. Autem et veritatis suscipit dolores molestias rerum est. Neque inventore nemo ut.', 651.66, 3, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(58, 'Accusantium maxime mollitia eos', 'Maiores laboriosam asperiores dolore asperiores quaerat expedita dolorem laborum.', 'Autem eligendi quam expedita qui architecto ratione voluptatem. Architecto eum est eos et et aut.', 977.10, 3, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(59, 'Perferendis est perferendis praesentium', 'Maxime esse amet enim quo dolor sint eos voluptatum qui repellendus.', 'Eum illo accusantium placeat atque quidem id. Dolores sed ut qui nihil architecto quam. Est libero libero rem.', 30.99, 3, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(60, 'Deserunt et', 'Repellendus aperiam ratione corrupti quis nostrum expedita nesciunt quia minus qui expedita molestiae.', 'Dolor quod laboriosam nostrum iure reprehenderit et numquam. Quod provident possimus incidunt excepturi. Eos ipsum nostrum et fugit maxime eaque sed odit. Incidunt in aut dicta.', 860.65, 3, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(61, 'Recusandae ea id', 'Voluptas numquam eum sint quod adipisci omnis laboriosam eum voluptas ea enim.', 'Est adipisci beatae repellat quisquam. Quisquam ea molestiae quasi doloribus culpa.', 117.88, 4, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(62, 'In qui recusandae natus', 'Et harum consequatur deleniti nemo consequatur sint nisi unde voluptates deleniti consequatur.', 'Porro voluptatum incidunt vel distinctio voluptatibus veritatis laudantium voluptatem. Nostrum sed nostrum sed et eveniet. Et excepturi aut laborum et itaque.', 381.20, 4, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(63, 'Quas dicta dolore', 'Sit et ut occaecati dolorum officia dolorem enim vero porro optio et sed officia.', 'Et quisquam ab praesentium saepe et sit numquam. Dolores impedit mollitia tempora fugit voluptatem alias ea et.', 256.51, 4, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(64, 'Voluptatem animi corrupti laboriosam sed', 'Aliquid eos alias vel a temporibus ex exercitationem cumque eum soluta.', 'Et officia quibusdam aut quo similique voluptatibus in et. Mollitia officiis quibusdam ut autem vel consequatur dolorem in. Qui ut ut molestiae.', 69.50, 4, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(65, 'Architecto id magni occaecati', 'Eos voluptatibus sequi provident reiciendis aspernatur aut.', 'Quidem similique enim sed at recusandae ab. Consequuntur minima vel necessitatibus molestiae. Labore placeat dolor autem sit quasi. Sint et ullam totam voluptatem saepe corrupti reprehenderit.', 187.62, 4, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(66, 'Illum et incidunt', 'Expedita et quis nulla voluptates aut laudantium hic fugiat nihil labore labore.', 'Praesentium qui blanditiis rem animi corporis est praesentium ut. Ea at voluptates voluptatem eos velit. Inventore nihil quia modi. Illum qui dolores ea debitis aliquid occaecati et.', 607.81, 4, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(67, 'Est sed', 'Quidem numquam necessitatibus perspiciatis maxime et placeat autem alias sint aut ea.', 'Non et magni nisi sit est. Nam provident rem non ratione. Possimus optio aut sit vitae. Minima voluptatibus possimus cum sequi odit.', 757.95, 4, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(68, 'Porro magnam ea est', 'Beatae adipisci et sint repellat rerum voluptatibus debitis.', 'Nemo cupiditate qui ea. Eaque similique dolores voluptatem ut. Laboriosam aut culpa libero corporis. Magni minima recusandae natus.', 696.58, 4, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(69, 'Doloremque aliquid tempora odit', 'Non fuga expedita id quas facilis ad ipsam corrupti error.', 'Quasi sequi corrupti delectus facilis. Dicta architecto omnis nisi mollitia sit. Corrupti ut amet natus eius voluptatum. Fugiat quia debitis quis dolorem ut cumque ab.', 405.78, 4, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(70, 'Eos voluptas modi dolorum', 'Distinctio laborum rem sapiente nesciunt excepturi iure iste officiis recusandae qui qui hic.', 'Sunt nulla eos et. Voluptatibus ea eveniet nostrum est est error nostrum. Consequuntur unde fugit laboriosam consequatur.', 127.84, 4, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(71, 'Doloremque porro nam', 'Autem dicta vero unde totam laborum excepturi aut dignissimos id fugiat nemo.', 'Exercitationem saepe voluptatum ea a. Dolore voluptatibus quasi et. Quia unde similique consectetur quis eius quia. Numquam aut quasi vero quia omnis autem.', 833.24, 4, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(72, 'Amet voluptas sint deserunt', 'Eveniet est minus qui nostrum unde amet animi.', 'Ullam tempore quis quibusdam vel cupiditate similique. Qui quis et neque doloribus est. Ipsa exercitationem quod accusamus doloremque et quibusdam velit voluptatibus. Quis nesciunt eveniet qui est.', 113.01, 4, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(73, 'Consequatur omnis autem iusto quaerat', 'Molestias ut cupiditate quod optio ratione nostrum similique.', 'Ipsa ipsam autem eius earum laboriosam ut. Provident distinctio id quo voluptatem.', 560.68, 4, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(74, 'Numquam hic et voluptatibus', 'Accusamus voluptatem sint perspiciatis deleniti ipsam pariatur delectus consequuntur est.', 'Laudantium facilis totam possimus ad. Repellat maiores voluptates exercitationem qui architecto quia qui. Sunt fuga quae iste rem aspernatur in.', 196.82, 4, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(75, 'Alias nam ducimus', 'Autem aspernatur cum aut ut harum consequuntur occaecati.', 'Vel asperiores pariatur non tempora. Dolores quasi ullam autem in dolor quasi ullam. Sunt ut veniam animi repellendus ipsa omnis. Perferendis ut ipsum nesciunt molestiae.', 343.52, 4, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(76, 'Sit eum voluptatum', 'Et quia ad voluptatem perferendis illum est.', 'Necessitatibus ut expedita sint et. Velit error repellendus quod ea ipsa et. Natus voluptatem consequuntur asperiores accusantium nemo error. Deserunt qui quas facere aliquam nostrum at aperiam.', 600.92, 4, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(77, 'Vitae nisi accusantium', 'Deserunt aliquid non et quos aliquam esse provident et occaecati.', 'Nihil alias eius nobis. Velit nihil hic suscipit dolor officia ad. Ut enim quia quia quam quia ut sit. Vel et quis aliquam aspernatur.', 52.82, 4, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(78, 'Et eius et laudantium expedita', 'Sed iure deserunt quo et ipsa placeat repudiandae ipsam iure ea est est sit.', 'Id quaerat dolore adipisci voluptatum in. Reiciendis aut ut velit dolores dignissimos magni. Dolor possimus qui est excepturi maiores. Placeat voluptas voluptatem minus consequatur necessitatibus.', 586.02, 4, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(79, 'Quidem soluta quasi maiores deserunt', 'Quia saepe autem autem numquam aut perspiciatis eligendi ab pariatur omnis eos.', 'Voluptatem ut atque vitae architecto dolores et. Eos expedita qui porro. Delectus qui eius tempora debitis eligendi velit temporibus. Omnis neque officiis quasi.', 75.99, 4, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(80, 'Quos fuga quaerat incidunt sit', 'Quaerat dolor vel eum possimus voluptas nisi et quia qui accusamus quia aliquid facilis.', 'Voluptatem rerum quia minima debitis nostrum. Quo vel nemo autem sapiente praesentium ipsam molestias. Est harum non iste pariatur sunt accusamus ipsa.', 158.89, 4, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(81, 'Nobis occaecati eos', 'Enim repudiandae accusamus repellat velit fugit consequatur qui non in enim voluptatum.', 'Sunt sapiente dolor tenetur quos voluptas. Dicta deserunt ut sed voluptatem magnam dolorem aut. Est architecto earum aut fugit officiis dolorem doloribus.', 847.33, 5, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(82, 'Nihil ipsam saepe illum', 'Quia facere voluptatem ex blanditiis quas dolor est voluptas soluta consequatur.', 'Tempore voluptas accusamus aut et recusandae ullam. Non delectus nesciunt unde atque ut.', 282.00, 5, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(83, 'Enim sequi illum', 'Quia et nisi velit ad sunt et dolorum quo deleniti voluptas fugit mollitia repudiandae.', 'Natus magnam qui nobis mollitia. Qui dolorem quo quis blanditiis est. Velit soluta earum accusantium odit est eum corporis.', 726.77, 5, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(84, 'Corrupti ab quos error', 'Fuga commodi culpa est culpa rerum eius.', 'Unde et vel est quas et consequatur. Sed voluptas nulla modi earum eos. Et eius explicabo culpa repellendus voluptas quasi eos. Culpa saepe velit ut laborum voluptates.', 838.74, 5, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(85, 'A iure dolorem', 'Omnis dolores nostrum dolores rerum sint amet aut velit pariatur earum.', 'Dolores et sequi cumque necessitatibus aliquid et. Cum modi qui et magnam sint magnam. Consequatur sapiente nesciunt est consequatur est. Hic laboriosam et soluta accusantium est illo aut nesciunt.', 504.68, 5, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(86, 'Tenetur nihil quia', 'Recusandae vitae iure animi eos possimus quo alias expedita rerum.', 'Recusandae voluptatem dignissimos qui. Voluptatem fugiat earum nihil qui. Aut totam recusandae aperiam et qui magnam est. Veniam occaecati nulla architecto eaque.', 437.08, 5, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(87, 'Placeat omnis ipsa omnis', 'Accusamus sed dolore odit at at reiciendis quas aliquid veniam.', 'Quas velit cum animi voluptatem eligendi. Maxime quos et et incidunt culpa ea impedit. Officiis distinctio sapiente placeat est eveniet dolores minima.', 303.27, 5, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(88, 'Esse veritatis cumque', 'Ducimus quasi magnam eius voluptatem quo ut voluptate rerum rerum necessitatibus earum accusamus.', 'Unde rerum et aliquid quos amet. Illum itaque cum quibusdam corrupti at totam mollitia.', 681.95, 5, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(89, 'Neque blanditiis repudiandae', 'Et repudiandae et delectus est id quia dolor maiores voluptas rerum necessitatibus qui.', 'Ut nihil architecto labore et vel a non. Dolores similique ipsam saepe quaerat sequi quidem non. Ut eum quo commodi pariatur. Quia tempora in quis rerum.', 228.43, 5, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(90, 'Saepe nemo et', 'Aut praesentium rerum nobis qui quis laudantium rerum illum.', 'Qui error qui corporis optio nam blanditiis recusandae. Impedit expedita dolorem non ullam recusandae. Odit est quibusdam saepe consequatur error distinctio non vitae.', 336.99, 5, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(91, 'Cumque mollitia fugit', 'Mollitia culpa enim labore ea et consequatur soluta quia.', 'Delectus temporibus sunt qui voluptates ad aut quibusdam. Natus sint nobis ut impedit. Ducimus quae qui possimus dolor sint labore necessitatibus. Eveniet minima aut sit quas rerum saepe.', 527.00, 5, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(92, 'In quisquam laudantium', 'Deleniti autem eos consectetur et et aut sit.', 'Facere minus neque alias sint eveniet. Molestias doloremque impedit sed excepturi. Veritatis voluptatem nemo cumque totam eos.', 32.11, 5, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(93, 'Dolores error velit', 'Quis quas inventore aut deleniti aut ex vitae laborum voluptas aspernatur aut.', 'Sint quaerat laudantium qui ex provident error eos maiores. Vero adipisci occaecati officiis non. Asperiores nam aut vel voluptates facilis quia.', 445.38, 5, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(94, 'Consequatur ut unde ut', 'Vero distinctio labore quia non expedita et commodi maiores atque laborum aliquid.', 'Eius quia qui repellendus laboriosam aut commodi. Mollitia ipsum nihil veniam minus. Harum minima cupiditate quis sed. Delectus qui sapiente dolor assumenda.', 608.99, 5, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(95, 'Dolorem ut delectus', 'Sit iste reprehenderit rerum dicta omnis impedit aut sunt suscipit et ratione eaque maxime.', 'Sit perspiciatis illo rerum reprehenderit. Dolores possimus eum vel in reprehenderit id. Suscipit impedit maiores est.', 539.54, 5, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(96, 'Minus cupiditate dignissimos ratione', 'Corrupti est molestiae itaque facere id iste et impedit.', 'Officiis saepe accusamus accusamus est ea officia. Quam quae et mollitia natus. Ab vel quo voluptatum sequi consequuntur veritatis unde.', 277.66, 5, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(97, 'Corporis provident minima quia', 'Consequatur quas nihil laboriosam dolore voluptatem et iure quia aut non laudantium animi.', 'Officia delectus dolor maxime sint esse qui. Fugiat id sit impedit quia molestias eveniet.', 448.84, 5, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(98, 'Quibusdam sint enim blanditiis', 'Quis tempore quia illum officia officiis officiis itaque dolorem.', 'Nihil nemo doloremque modi quis adipisci suscipit nulla. Rerum optio nisi aspernatur et incidunt ducimus. Non sed fugit ea voluptas earum beatae. Illo vel delectus repudiandae pariatur aut.', 79.28, 5, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(99, 'Repellendus earum aut velit', 'Modi dolores sed deserunt fugiat numquam atque magnam dolore qui.', 'Non ut eius sint facilis ut ex. Corrupti aut unde dolorem quo ratione quae maxime. Sit quia alias ex voluptatem omnis est. Sit exercitationem rerum error voluptates et architecto et est.', 909.13, 5, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(100, 'Omnis distinctio deleniti nobis', 'Ea maxime dignissimos ea aut molestiae quia consectetur deleniti.', 'Omnis ut distinctio aut et omnis. Aut dolores et cumque quia architecto nesciunt. Non explicabo est recusandae sunt dolores quo recusandae.', 976.61, 5, '2020-04-13 21:15:12', '2020-04-13 21:15:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_imagens`
--

CREATE TABLE `producto_imagens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destacada` tinyint(1) NOT NULL DEFAULT '0',
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto_imagens`
--

INSERT INTO `producto_imagens` (`id`, `image`, `destacada`, `producto_id`, `created_at`, `updated_at`) VALUES
(6, 'https://lorempixel.com/250/250/?24189', 0, 2, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(7, 'https://lorempixel.com/250/250/?94526', 0, 2, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(8, 'https://lorempixel.com/250/250/?34853', 0, 2, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(9, 'https://lorempixel.com/250/250/?38316', 0, 2, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(10, 'https://lorempixel.com/250/250/?99515', 0, 2, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(11, 'https://lorempixel.com/250/250/?46634', 0, 3, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(12, 'https://lorempixel.com/250/250/?30510', 0, 3, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(13, 'https://lorempixel.com/250/250/?60593', 0, 3, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(14, 'https://lorempixel.com/250/250/?64650', 0, 3, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(15, 'https://lorempixel.com/250/250/?19109', 0, 3, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(16, 'https://lorempixel.com/250/250/?42756', 0, 4, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(17, 'https://lorempixel.com/250/250/?77901', 0, 4, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(18, 'https://lorempixel.com/250/250/?74832', 0, 4, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(19, 'https://lorempixel.com/250/250/?46961', 0, 4, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(20, 'https://lorempixel.com/250/250/?49273', 0, 4, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(21, 'https://lorempixel.com/250/250/?19764', 0, 5, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(22, 'https://lorempixel.com/250/250/?31947', 0, 5, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(23, 'https://lorempixel.com/250/250/?66124', 0, 5, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(24, 'https://lorempixel.com/250/250/?40327', 0, 5, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(25, 'https://lorempixel.com/250/250/?54161', 0, 5, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(26, 'https://lorempixel.com/250/250/?14560', 0, 6, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(27, 'https://lorempixel.com/250/250/?78148', 0, 6, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(28, 'https://lorempixel.com/250/250/?51742', 0, 6, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(29, 'https://lorempixel.com/250/250/?28200', 0, 6, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(30, 'https://lorempixel.com/250/250/?22077', 0, 6, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(31, 'https://lorempixel.com/250/250/?68952', 0, 7, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(32, 'https://lorempixel.com/250/250/?71735', 0, 7, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(33, 'https://lorempixel.com/250/250/?87438', 0, 7, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(34, 'https://lorempixel.com/250/250/?23816', 0, 7, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(35, 'https://lorempixel.com/250/250/?78645', 0, 7, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(36, 'https://lorempixel.com/250/250/?90089', 0, 8, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(37, 'https://lorempixel.com/250/250/?49607', 0, 8, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(38, 'https://lorempixel.com/250/250/?74230', 0, 8, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(39, 'https://lorempixel.com/250/250/?41903', 0, 8, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(40, 'https://lorempixel.com/250/250/?58025', 0, 8, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(41, 'https://lorempixel.com/250/250/?60917', 0, 9, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(42, 'https://lorempixel.com/250/250/?80130', 0, 9, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(43, 'https://lorempixel.com/250/250/?60690', 0, 9, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(44, 'https://lorempixel.com/250/250/?42061', 0, 9, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(45, 'https://lorempixel.com/250/250/?45964', 0, 9, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(46, 'https://lorempixel.com/250/250/?67554', 0, 10, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(47, 'https://lorempixel.com/250/250/?17760', 0, 10, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(48, 'https://lorempixel.com/250/250/?54372', 0, 10, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(49, 'https://lorempixel.com/250/250/?17909', 0, 10, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(50, 'https://lorempixel.com/250/250/?42003', 0, 10, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(51, 'https://lorempixel.com/250/250/?22497', 0, 11, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(52, 'https://lorempixel.com/250/250/?55118', 0, 11, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(53, 'https://lorempixel.com/250/250/?22713', 0, 11, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(54, 'https://lorempixel.com/250/250/?12530', 0, 11, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(55, 'https://lorempixel.com/250/250/?69187', 0, 11, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(56, 'https://lorempixel.com/250/250/?42303', 0, 12, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(57, 'https://lorempixel.com/250/250/?74340', 0, 12, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(58, 'https://lorempixel.com/250/250/?22610', 0, 12, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(59, 'https://lorempixel.com/250/250/?92614', 0, 12, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(60, 'https://lorempixel.com/250/250/?36188', 0, 12, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(61, 'https://lorempixel.com/250/250/?17964', 0, 13, '2020-04-13 21:15:03', '2020-04-13 21:15:03'),
(62, 'https://lorempixel.com/250/250/?39665', 0, 13, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(63, 'https://lorempixel.com/250/250/?61504', 0, 13, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(64, 'https://lorempixel.com/250/250/?13478', 0, 13, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(65, 'https://lorempixel.com/250/250/?10480', 0, 13, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(66, 'https://lorempixel.com/250/250/?97511', 0, 14, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(67, 'https://lorempixel.com/250/250/?44884', 0, 14, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(68, 'https://lorempixel.com/250/250/?90762', 0, 14, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(69, 'https://lorempixel.com/250/250/?26983', 0, 14, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(70, 'https://lorempixel.com/250/250/?74959', 0, 14, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(71, 'https://lorempixel.com/250/250/?52628', 0, 15, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(72, 'https://lorempixel.com/250/250/?62134', 0, 15, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(73, 'https://lorempixel.com/250/250/?68645', 0, 15, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(74, 'https://lorempixel.com/250/250/?92557', 0, 15, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(75, 'https://lorempixel.com/250/250/?93583', 0, 15, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(76, 'https://lorempixel.com/250/250/?66041', 0, 16, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(77, 'https://lorempixel.com/250/250/?34719', 0, 16, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(78, 'https://lorempixel.com/250/250/?99435', 0, 16, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(79, 'https://lorempixel.com/250/250/?37882', 0, 16, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(80, 'https://lorempixel.com/250/250/?99136', 0, 16, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(81, 'https://lorempixel.com/250/250/?20222', 0, 17, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(82, 'https://lorempixel.com/250/250/?82855', 0, 17, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(83, 'https://lorempixel.com/250/250/?45408', 0, 17, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(84, 'https://lorempixel.com/250/250/?72170', 0, 17, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(85, 'https://lorempixel.com/250/250/?31971', 0, 17, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(86, 'https://lorempixel.com/250/250/?45466', 0, 18, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(87, 'https://lorempixel.com/250/250/?31761', 0, 18, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(88, 'https://lorempixel.com/250/250/?53593', 0, 18, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(89, 'https://lorempixel.com/250/250/?63117', 0, 18, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(90, 'https://lorempixel.com/250/250/?83342', 0, 18, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(91, 'https://lorempixel.com/250/250/?13315', 0, 19, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(92, 'https://lorempixel.com/250/250/?11956', 0, 19, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(93, 'https://lorempixel.com/250/250/?10376', 0, 19, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(94, 'https://lorempixel.com/250/250/?91010', 0, 19, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(95, 'https://lorempixel.com/250/250/?88855', 0, 19, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(96, 'https://lorempixel.com/250/250/?40726', 0, 20, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(97, 'https://lorempixel.com/250/250/?37891', 0, 20, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(98, 'https://lorempixel.com/250/250/?53800', 0, 20, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(99, 'https://lorempixel.com/250/250/?93410', 0, 20, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(100, 'https://lorempixel.com/250/250/?91064', 0, 20, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(101, 'https://lorempixel.com/250/250/?30917', 0, 21, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(102, 'https://lorempixel.com/250/250/?99495', 0, 21, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(103, 'https://lorempixel.com/250/250/?10570', 0, 21, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(104, 'https://lorempixel.com/250/250/?91964', 0, 21, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(105, 'https://lorempixel.com/250/250/?20681', 0, 21, '2020-04-13 21:15:04', '2020-04-13 21:15:04'),
(106, 'https://lorempixel.com/250/250/?68123', 0, 22, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(107, 'https://lorempixel.com/250/250/?93482', 0, 22, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(108, 'https://lorempixel.com/250/250/?35352', 0, 22, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(109, 'https://lorempixel.com/250/250/?56160', 0, 22, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(110, 'https://lorempixel.com/250/250/?62458', 0, 22, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(111, 'https://lorempixel.com/250/250/?68839', 0, 23, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(112, 'https://lorempixel.com/250/250/?37063', 0, 23, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(113, 'https://lorempixel.com/250/250/?38101', 0, 23, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(114, 'https://lorempixel.com/250/250/?19522', 0, 23, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(115, 'https://lorempixel.com/250/250/?98922', 0, 23, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(116, 'https://lorempixel.com/250/250/?82632', 0, 24, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(117, 'https://lorempixel.com/250/250/?72231', 0, 24, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(118, 'https://lorempixel.com/250/250/?26212', 0, 24, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(119, 'https://lorempixel.com/250/250/?14231', 0, 24, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(120, 'https://lorempixel.com/250/250/?93655', 0, 24, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(121, 'https://lorempixel.com/250/250/?69354', 0, 25, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(122, 'https://lorempixel.com/250/250/?15729', 0, 25, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(123, 'https://lorempixel.com/250/250/?46973', 0, 25, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(124, 'https://lorempixel.com/250/250/?62824', 0, 25, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(125, 'https://lorempixel.com/250/250/?76433', 0, 25, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(126, 'https://lorempixel.com/250/250/?82970', 0, 26, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(127, 'https://lorempixel.com/250/250/?11166', 0, 26, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(128, 'https://lorempixel.com/250/250/?65955', 0, 26, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(129, 'https://lorempixel.com/250/250/?79188', 0, 26, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(130, 'https://lorempixel.com/250/250/?96040', 0, 26, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(131, 'https://lorempixel.com/250/250/?61161', 0, 27, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(132, 'https://lorempixel.com/250/250/?65993', 0, 27, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(133, 'https://lorempixel.com/250/250/?19687', 0, 27, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(134, 'https://lorempixel.com/250/250/?21747', 0, 27, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(135, 'https://lorempixel.com/250/250/?74879', 0, 27, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(136, 'https://lorempixel.com/250/250/?85106', 0, 28, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(137, 'https://lorempixel.com/250/250/?82232', 0, 28, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(138, 'https://lorempixel.com/250/250/?87360', 0, 28, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(139, 'https://lorempixel.com/250/250/?62179', 0, 28, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(140, 'https://lorempixel.com/250/250/?64710', 0, 28, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(141, 'https://lorempixel.com/250/250/?91786', 0, 29, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(142, 'https://lorempixel.com/250/250/?34088', 0, 29, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(143, 'https://lorempixel.com/250/250/?22896', 0, 29, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(144, 'https://lorempixel.com/250/250/?26421', 0, 29, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(145, 'https://lorempixel.com/250/250/?66873', 0, 29, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(146, 'https://lorempixel.com/250/250/?74886', 0, 30, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(147, 'https://lorempixel.com/250/250/?43979', 0, 30, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(148, 'https://lorempixel.com/250/250/?66170', 0, 30, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(149, 'https://lorempixel.com/250/250/?78340', 0, 30, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(150, 'https://lorempixel.com/250/250/?54246', 0, 30, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(151, 'https://lorempixel.com/250/250/?89217', 0, 31, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(152, 'https://lorempixel.com/250/250/?33336', 0, 31, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(153, 'https://lorempixel.com/250/250/?11427', 0, 31, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(154, 'https://lorempixel.com/250/250/?23360', 0, 31, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(155, 'https://lorempixel.com/250/250/?60007', 0, 31, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(156, 'https://lorempixel.com/250/250/?69899', 0, 32, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(157, 'https://lorempixel.com/250/250/?39152', 0, 32, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(158, 'https://lorempixel.com/250/250/?38853', 0, 32, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(159, 'https://lorempixel.com/250/250/?13074', 0, 32, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(160, 'https://lorempixel.com/250/250/?58618', 0, 32, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(161, 'https://lorempixel.com/250/250/?40903', 0, 33, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(162, 'https://lorempixel.com/250/250/?67663', 0, 33, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(163, 'https://lorempixel.com/250/250/?98356', 0, 33, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(164, 'https://lorempixel.com/250/250/?91708', 0, 33, '2020-04-13 21:15:05', '2020-04-13 21:15:05'),
(165, 'https://lorempixel.com/250/250/?28175', 0, 33, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(166, 'https://lorempixel.com/250/250/?31962', 0, 34, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(167, 'https://lorempixel.com/250/250/?14214', 0, 34, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(168, 'https://lorempixel.com/250/250/?79964', 0, 34, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(169, 'https://lorempixel.com/250/250/?56925', 0, 34, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(170, 'https://lorempixel.com/250/250/?39167', 0, 34, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(171, 'https://lorempixel.com/250/250/?14087', 0, 35, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(172, 'https://lorempixel.com/250/250/?44175', 0, 35, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(173, 'https://lorempixel.com/250/250/?74128', 0, 35, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(174, 'https://lorempixel.com/250/250/?57135', 0, 35, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(175, 'https://lorempixel.com/250/250/?72230', 0, 35, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(176, 'https://lorempixel.com/250/250/?35130', 0, 36, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(177, 'https://lorempixel.com/250/250/?17345', 0, 36, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(178, 'https://lorempixel.com/250/250/?39200', 0, 36, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(179, 'https://lorempixel.com/250/250/?96423', 0, 36, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(180, 'https://lorempixel.com/250/250/?44986', 0, 36, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(181, 'https://lorempixel.com/250/250/?98824', 0, 37, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(182, 'https://lorempixel.com/250/250/?49724', 0, 37, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(183, 'https://lorempixel.com/250/250/?99312', 0, 37, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(184, 'https://lorempixel.com/250/250/?48180', 0, 37, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(185, 'https://lorempixel.com/250/250/?56403', 0, 37, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(186, 'https://lorempixel.com/250/250/?40975', 0, 38, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(187, 'https://lorempixel.com/250/250/?28260', 0, 38, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(188, 'https://lorempixel.com/250/250/?45553', 0, 38, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(189, 'https://lorempixel.com/250/250/?80795', 0, 38, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(190, 'https://lorempixel.com/250/250/?66920', 0, 38, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(191, 'https://lorempixel.com/250/250/?30340', 0, 39, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(192, 'https://lorempixel.com/250/250/?38610', 0, 39, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(193, 'https://lorempixel.com/250/250/?50787', 0, 39, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(194, 'https://lorempixel.com/250/250/?27269', 0, 39, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(195, 'https://lorempixel.com/250/250/?86758', 0, 39, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(196, 'https://lorempixel.com/250/250/?23976', 0, 40, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(197, 'https://lorempixel.com/250/250/?16791', 0, 40, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(198, 'https://lorempixel.com/250/250/?94685', 0, 40, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(199, 'https://lorempixel.com/250/250/?27508', 0, 40, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(200, 'https://lorempixel.com/250/250/?41927', 0, 40, '2020-04-13 21:15:06', '2020-04-13 21:15:06'),
(201, 'https://lorempixel.com/250/250/?67904', 0, 41, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(202, 'https://lorempixel.com/250/250/?19209', 0, 41, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(203, 'https://lorempixel.com/250/250/?98968', 0, 41, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(204, 'https://lorempixel.com/250/250/?63436', 0, 41, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(205, 'https://lorempixel.com/250/250/?16981', 0, 41, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(206, 'https://lorempixel.com/250/250/?39132', 0, 42, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(207, 'https://lorempixel.com/250/250/?30918', 0, 42, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(208, 'https://lorempixel.com/250/250/?73640', 0, 42, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(209, 'https://lorempixel.com/250/250/?56142', 0, 42, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(210, 'https://lorempixel.com/250/250/?93805', 0, 42, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(211, 'https://lorempixel.com/250/250/?33587', 0, 43, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(212, 'https://lorempixel.com/250/250/?35526', 0, 43, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(213, 'https://lorempixel.com/250/250/?14835', 0, 43, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(214, 'https://lorempixel.com/250/250/?86466', 0, 43, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(215, 'https://lorempixel.com/250/250/?18069', 0, 43, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(216, 'https://lorempixel.com/250/250/?92189', 0, 44, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(217, 'https://lorempixel.com/250/250/?13254', 0, 44, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(218, 'https://lorempixel.com/250/250/?65215', 0, 44, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(219, 'https://lorempixel.com/250/250/?85071', 0, 44, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(220, 'https://lorempixel.com/250/250/?95127', 0, 44, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(221, 'https://lorempixel.com/250/250/?83516', 0, 45, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(222, 'https://lorempixel.com/250/250/?10706', 0, 45, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(223, 'https://lorempixel.com/250/250/?95733', 0, 45, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(224, 'https://lorempixel.com/250/250/?50450', 0, 45, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(225, 'https://lorempixel.com/250/250/?23441', 0, 45, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(226, 'https://lorempixel.com/250/250/?27139', 0, 46, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(227, 'https://lorempixel.com/250/250/?10858', 0, 46, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(228, 'https://lorempixel.com/250/250/?11148', 0, 46, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(229, 'https://lorempixel.com/250/250/?50789', 0, 46, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(230, 'https://lorempixel.com/250/250/?19822', 0, 46, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(231, 'https://lorempixel.com/250/250/?52070', 0, 47, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(232, 'https://lorempixel.com/250/250/?43432', 0, 47, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(233, 'https://lorempixel.com/250/250/?50665', 0, 47, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(234, 'https://lorempixel.com/250/250/?16607', 0, 47, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(235, 'https://lorempixel.com/250/250/?58603', 0, 47, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(236, 'https://lorempixel.com/250/250/?85055', 0, 48, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(237, 'https://lorempixel.com/250/250/?39597', 0, 48, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(238, 'https://lorempixel.com/250/250/?80192', 0, 48, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(239, 'https://lorempixel.com/250/250/?60228', 0, 48, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(240, 'https://lorempixel.com/250/250/?97372', 0, 48, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(241, 'https://lorempixel.com/250/250/?31345', 0, 49, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(242, 'https://lorempixel.com/250/250/?27168', 0, 49, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(243, 'https://lorempixel.com/250/250/?26732', 0, 49, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(244, 'https://lorempixel.com/250/250/?54372', 0, 49, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(245, 'https://lorempixel.com/250/250/?10116', 0, 49, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(246, 'https://lorempixel.com/250/250/?19246', 0, 50, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(247, 'https://lorempixel.com/250/250/?49141', 0, 50, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(248, 'https://lorempixel.com/250/250/?45277', 0, 50, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(249, 'https://lorempixel.com/250/250/?62626', 0, 50, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(250, 'https://lorempixel.com/250/250/?28778', 0, 50, '2020-04-13 21:15:07', '2020-04-13 21:15:07'),
(251, 'https://lorempixel.com/250/250/?68486', 0, 51, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(252, 'https://lorempixel.com/250/250/?88738', 0, 51, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(253, 'https://lorempixel.com/250/250/?89577', 0, 51, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(254, 'https://lorempixel.com/250/250/?75516', 0, 51, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(255, 'https://lorempixel.com/250/250/?76119', 0, 51, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(256, 'https://lorempixel.com/250/250/?82556', 0, 52, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(257, 'https://lorempixel.com/250/250/?38161', 0, 52, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(258, 'https://lorempixel.com/250/250/?92440', 0, 52, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(259, 'https://lorempixel.com/250/250/?12032', 0, 52, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(260, 'https://lorempixel.com/250/250/?18839', 0, 52, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(261, 'https://lorempixel.com/250/250/?48553', 0, 53, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(262, 'https://lorempixel.com/250/250/?18587', 0, 53, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(263, 'https://lorempixel.com/250/250/?21763', 0, 53, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(264, 'https://lorempixel.com/250/250/?81047', 0, 53, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(265, 'https://lorempixel.com/250/250/?84117', 0, 53, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(266, 'https://lorempixel.com/250/250/?58454', 0, 54, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(267, 'https://lorempixel.com/250/250/?47660', 0, 54, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(268, 'https://lorempixel.com/250/250/?54637', 0, 54, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(269, 'https://lorempixel.com/250/250/?31381', 0, 54, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(270, 'https://lorempixel.com/250/250/?50454', 0, 54, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(271, 'https://lorempixel.com/250/250/?40643', 0, 55, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(272, 'https://lorempixel.com/250/250/?24774', 0, 55, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(273, 'https://lorempixel.com/250/250/?96013', 0, 55, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(274, 'https://lorempixel.com/250/250/?21234', 0, 55, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(275, 'https://lorempixel.com/250/250/?87645', 0, 55, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(276, 'https://lorempixel.com/250/250/?63640', 0, 56, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(277, 'https://lorempixel.com/250/250/?52849', 0, 56, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(278, 'https://lorempixel.com/250/250/?32640', 0, 56, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(279, 'https://lorempixel.com/250/250/?63660', 0, 56, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(280, 'https://lorempixel.com/250/250/?53181', 0, 56, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(281, 'https://lorempixel.com/250/250/?91436', 0, 57, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(282, 'https://lorempixel.com/250/250/?56990', 0, 57, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(283, 'https://lorempixel.com/250/250/?48049', 0, 57, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(284, 'https://lorempixel.com/250/250/?54417', 0, 57, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(285, 'https://lorempixel.com/250/250/?37211', 0, 57, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(286, 'https://lorempixel.com/250/250/?15837', 0, 58, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(287, 'https://lorempixel.com/250/250/?92256', 0, 58, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(288, 'https://lorempixel.com/250/250/?14437', 0, 58, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(289, 'https://lorempixel.com/250/250/?71096', 0, 58, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(290, 'https://lorempixel.com/250/250/?53357', 0, 58, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(291, 'https://lorempixel.com/250/250/?30510', 0, 59, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(292, 'https://lorempixel.com/250/250/?82942', 0, 59, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(293, 'https://lorempixel.com/250/250/?16229', 0, 59, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(294, 'https://lorempixel.com/250/250/?53571', 0, 59, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(295, 'https://lorempixel.com/250/250/?49536', 0, 59, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(296, 'https://lorempixel.com/250/250/?95139', 0, 60, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(297, 'https://lorempixel.com/250/250/?72074', 0, 60, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(298, 'https://lorempixel.com/250/250/?13818', 0, 60, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(299, 'https://lorempixel.com/250/250/?99736', 0, 60, '2020-04-13 21:15:08', '2020-04-13 21:15:08'),
(300, 'https://lorempixel.com/250/250/?41784', 0, 60, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(301, 'https://lorempixel.com/250/250/?90865', 0, 61, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(302, 'https://lorempixel.com/250/250/?62371', 0, 61, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(303, 'https://lorempixel.com/250/250/?47837', 0, 61, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(304, 'https://lorempixel.com/250/250/?99062', 0, 61, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(305, 'https://lorempixel.com/250/250/?99127', 0, 61, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(306, 'https://lorempixel.com/250/250/?15272', 0, 62, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(307, 'https://lorempixel.com/250/250/?53161', 0, 62, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(308, 'https://lorempixel.com/250/250/?50384', 0, 62, '2020-04-13 21:15:09', '2020-04-13 21:15:09'),
(309, 'https://lorempixel.com/250/250/?64904', 0, 62, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(310, 'https://lorempixel.com/250/250/?77552', 0, 62, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(311, 'https://lorempixel.com/250/250/?26559', 0, 63, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(312, 'https://lorempixel.com/250/250/?47937', 0, 63, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(313, 'https://lorempixel.com/250/250/?53022', 0, 63, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(314, 'https://lorempixel.com/250/250/?61901', 0, 63, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(315, 'https://lorempixel.com/250/250/?85079', 0, 63, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(316, 'https://lorempixel.com/250/250/?96693', 0, 64, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(317, 'https://lorempixel.com/250/250/?83853', 0, 64, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(318, 'https://lorempixel.com/250/250/?13085', 0, 64, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(319, 'https://lorempixel.com/250/250/?91658', 0, 64, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(320, 'https://lorempixel.com/250/250/?18046', 0, 64, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(321, 'https://lorempixel.com/250/250/?69909', 0, 65, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(322, 'https://lorempixel.com/250/250/?10290', 0, 65, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(323, 'https://lorempixel.com/250/250/?71686', 0, 65, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(324, 'https://lorempixel.com/250/250/?12705', 0, 65, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(325, 'https://lorempixel.com/250/250/?75891', 0, 65, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(326, 'https://lorempixel.com/250/250/?25354', 0, 66, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(327, 'https://lorempixel.com/250/250/?61720', 0, 66, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(328, 'https://lorempixel.com/250/250/?72121', 0, 66, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(329, 'https://lorempixel.com/250/250/?35442', 0, 66, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(330, 'https://lorempixel.com/250/250/?27842', 0, 66, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(331, 'https://lorempixel.com/250/250/?79434', 0, 67, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(332, 'https://lorempixel.com/250/250/?71713', 0, 67, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(333, 'https://lorempixel.com/250/250/?15431', 0, 67, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(334, 'https://lorempixel.com/250/250/?64898', 0, 67, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(335, 'https://lorempixel.com/250/250/?20253', 0, 67, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(336, 'https://lorempixel.com/250/250/?15483', 0, 68, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(337, 'https://lorempixel.com/250/250/?16597', 0, 68, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(338, 'https://lorempixel.com/250/250/?70967', 0, 68, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(339, 'https://lorempixel.com/250/250/?73040', 0, 68, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(340, 'https://lorempixel.com/250/250/?38372', 0, 68, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(341, 'https://lorempixel.com/250/250/?22178', 0, 69, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(342, 'https://lorempixel.com/250/250/?46294', 0, 69, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(343, 'https://lorempixel.com/250/250/?54308', 0, 69, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(344, 'https://lorempixel.com/250/250/?94592', 0, 69, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(345, 'https://lorempixel.com/250/250/?98708', 0, 69, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(346, 'https://lorempixel.com/250/250/?18520', 0, 70, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(347, 'https://lorempixel.com/250/250/?21256', 0, 70, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(348, 'https://lorempixel.com/250/250/?36550', 0, 70, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(349, 'https://lorempixel.com/250/250/?88260', 0, 70, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(350, 'https://lorempixel.com/250/250/?60194', 0, 70, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(351, 'https://lorempixel.com/250/250/?95315', 0, 71, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(352, 'https://lorempixel.com/250/250/?73304', 0, 71, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(353, 'https://lorempixel.com/250/250/?13687', 0, 71, '2020-04-13 21:15:10', '2020-04-13 21:15:10'),
(354, 'https://lorempixel.com/250/250/?31985', 0, 71, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(355, 'https://lorempixel.com/250/250/?84030', 0, 71, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(356, 'https://lorempixel.com/250/250/?19309', 0, 72, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(357, 'https://lorempixel.com/250/250/?53297', 0, 72, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(358, 'https://lorempixel.com/250/250/?35153', 0, 72, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(359, 'https://lorempixel.com/250/250/?18953', 0, 72, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(360, 'https://lorempixel.com/250/250/?96744', 0, 72, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(361, 'https://lorempixel.com/250/250/?55437', 0, 73, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(362, 'https://lorempixel.com/250/250/?95512', 0, 73, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(363, 'https://lorempixel.com/250/250/?28318', 0, 73, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(364, 'https://lorempixel.com/250/250/?46337', 0, 73, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(365, 'https://lorempixel.com/250/250/?45065', 0, 73, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(366, 'https://lorempixel.com/250/250/?67851', 0, 74, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(367, 'https://lorempixel.com/250/250/?11949', 0, 74, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(368, 'https://lorempixel.com/250/250/?34294', 0, 74, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(369, 'https://lorempixel.com/250/250/?21398', 0, 74, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(370, 'https://lorempixel.com/250/250/?21171', 0, 74, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(371, 'https://lorempixel.com/250/250/?17507', 0, 75, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(372, 'https://lorempixel.com/250/250/?99002', 0, 75, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(373, 'https://lorempixel.com/250/250/?11025', 0, 75, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(374, 'https://lorempixel.com/250/250/?41524', 0, 75, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(375, 'https://lorempixel.com/250/250/?53095', 0, 75, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(376, 'https://lorempixel.com/250/250/?91305', 0, 76, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(377, 'https://lorempixel.com/250/250/?59254', 0, 76, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(378, 'https://lorempixel.com/250/250/?39113', 0, 76, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(379, 'https://lorempixel.com/250/250/?91309', 0, 76, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(380, 'https://lorempixel.com/250/250/?81410', 0, 76, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(381, 'https://lorempixel.com/250/250/?65541', 0, 77, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(382, 'https://lorempixel.com/250/250/?22874', 0, 77, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(383, 'https://lorempixel.com/250/250/?34456', 0, 77, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(384, 'https://lorempixel.com/250/250/?55264', 0, 77, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(385, 'https://lorempixel.com/250/250/?30604', 0, 77, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(386, 'https://lorempixel.com/250/250/?30015', 0, 78, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(387, 'https://lorempixel.com/250/250/?30094', 0, 78, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(388, 'https://lorempixel.com/250/250/?23063', 0, 78, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(389, 'https://lorempixel.com/250/250/?68165', 0, 78, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(390, 'https://lorempixel.com/250/250/?34339', 0, 78, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(391, 'https://lorempixel.com/250/250/?59775', 0, 79, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(392, 'https://lorempixel.com/250/250/?97698', 0, 79, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(393, 'https://lorempixel.com/250/250/?28570', 0, 79, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(394, 'https://lorempixel.com/250/250/?61599', 0, 79, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(395, 'https://lorempixel.com/250/250/?59098', 0, 79, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(396, 'https://lorempixel.com/250/250/?86659', 0, 80, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(397, 'https://lorempixel.com/250/250/?22795', 0, 80, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(398, 'https://lorempixel.com/250/250/?94016', 0, 80, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(399, 'https://lorempixel.com/250/250/?75599', 0, 80, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(400, 'https://lorempixel.com/250/250/?52339', 0, 80, '2020-04-13 21:15:11', '2020-04-13 21:15:11'),
(401, 'https://lorempixel.com/250/250/?33248', 0, 81, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(402, 'https://lorempixel.com/250/250/?36773', 0, 81, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(403, 'https://lorempixel.com/250/250/?97200', 0, 81, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(404, 'https://lorempixel.com/250/250/?69253', 0, 81, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(405, 'https://lorempixel.com/250/250/?12191', 0, 81, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(406, 'https://lorempixel.com/250/250/?85080', 0, 82, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(407, 'https://lorempixel.com/250/250/?53457', 0, 82, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(408, 'https://lorempixel.com/250/250/?28177', 0, 82, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(409, 'https://lorempixel.com/250/250/?85704', 0, 82, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(410, 'https://lorempixel.com/250/250/?45092', 0, 82, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(411, 'https://lorempixel.com/250/250/?30833', 0, 83, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(412, 'https://lorempixel.com/250/250/?35029', 0, 83, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(413, 'https://lorempixel.com/250/250/?62015', 0, 83, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(414, 'https://lorempixel.com/250/250/?34340', 0, 83, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(415, 'https://lorempixel.com/250/250/?92614', 0, 83, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(416, 'https://lorempixel.com/250/250/?90498', 0, 84, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(417, 'https://lorempixel.com/250/250/?40644', 0, 84, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(418, 'https://lorempixel.com/250/250/?31543', 0, 84, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(419, 'https://lorempixel.com/250/250/?58728', 0, 84, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(420, 'https://lorempixel.com/250/250/?95161', 0, 84, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(421, 'https://lorempixel.com/250/250/?37621', 0, 85, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(422, 'https://lorempixel.com/250/250/?66352', 0, 85, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(423, 'https://lorempixel.com/250/250/?42127', 0, 85, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(424, 'https://lorempixel.com/250/250/?64429', 0, 85, '2020-04-13 21:15:12', '2020-04-13 21:15:12'),
(425, 'https://lorempixel.com/250/250/?99504', 0, 85, '2020-04-13 21:15:13', '2020-04-13 21:15:13'),
(426, 'https://lorempixel.com/250/250/?76137', 0, 86, '2020-04-13 21:15:13', '2020-04-13 21:15:13'),
(427, 'https://lorempixel.com/250/250/?59948', 0, 86, '2020-04-13 21:15:13', '2020-04-13 21:15:13'),
(428, 'https://lorempixel.com/250/250/?35568', 0, 86, '2020-04-13 21:15:13', '2020-04-13 21:15:13'),
(429, 'https://lorempixel.com/250/250/?77561', 0, 86, '2020-04-13 21:15:13', '2020-04-13 21:15:13'),
(430, 'https://lorempixel.com/250/250/?22191', 0, 86, '2020-04-13 21:15:13', '2020-04-13 21:15:13'),
(431, 'https://lorempixel.com/250/250/?81620', 0, 87, '2020-04-13 21:15:13', '2020-04-13 21:15:13'),
(432, 'https://lorempixel.com/250/250/?29551', 0, 87, '2020-04-13 21:15:13', '2020-04-13 21:15:13'),
(433, 'https://lorempixel.com/250/250/?62577', 0, 87, '2020-04-13 21:15:13', '2020-04-13 21:15:13'),
(434, 'https://lorempixel.com/250/250/?47174', 0, 87, '2020-04-13 21:15:13', '2020-04-13 21:15:13'),
(435, 'https://lorempixel.com/250/250/?55896', 0, 87, '2020-04-13 21:15:13', '2020-04-13 21:15:13'),
(436, 'https://lorempixel.com/250/250/?75143', 0, 88, '2020-04-13 21:15:13', '2020-04-13 21:15:13'),
(437, 'https://lorempixel.com/250/250/?17583', 0, 88, '2020-04-13 21:15:13', '2020-04-13 21:15:13'),
(438, 'https://lorempixel.com/250/250/?15029', 0, 88, '2020-04-13 21:15:13', '2020-04-13 21:15:13'),
(439, 'https://lorempixel.com/250/250/?93775', 0, 88, '2020-04-13 21:15:13', '2020-04-13 21:15:13'),
(440, 'https://lorempixel.com/250/250/?85454', 0, 88, '2020-04-13 21:15:13', '2020-04-13 21:15:13'),
(441, 'https://lorempixel.com/250/250/?15144', 0, 89, '2020-04-13 21:15:13', '2020-04-13 21:15:13'),
(442, 'https://lorempixel.com/250/250/?55980', 0, 89, '2020-04-13 21:15:13', '2020-04-13 21:15:13'),
(443, 'https://lorempixel.com/250/250/?80210', 0, 89, '2020-04-13 21:15:13', '2020-04-13 21:15:13'),
(444, 'https://lorempixel.com/250/250/?92657', 0, 89, '2020-04-13 21:15:13', '2020-04-13 21:15:13'),
(445, 'https://lorempixel.com/250/250/?40949', 0, 89, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(446, 'https://lorempixel.com/250/250/?55925', 0, 90, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(447, 'https://lorempixel.com/250/250/?96685', 0, 90, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(448, 'https://lorempixel.com/250/250/?88279', 0, 90, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(449, 'https://lorempixel.com/250/250/?30491', 0, 90, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(450, 'https://lorempixel.com/250/250/?71775', 0, 90, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(451, 'https://lorempixel.com/250/250/?23427', 0, 91, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(452, 'https://lorempixel.com/250/250/?21447', 0, 91, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(453, 'https://lorempixel.com/250/250/?86600', 0, 91, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(454, 'https://lorempixel.com/250/250/?56254', 0, 91, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(455, 'https://lorempixel.com/250/250/?40163', 0, 91, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(456, 'https://lorempixel.com/250/250/?17563', 0, 92, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(457, 'https://lorempixel.com/250/250/?24648', 0, 92, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(458, 'https://lorempixel.com/250/250/?37059', 0, 92, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(459, 'https://lorempixel.com/250/250/?47370', 0, 92, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(460, 'https://lorempixel.com/250/250/?99141', 0, 92, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(461, 'https://lorempixel.com/250/250/?86607', 0, 93, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(462, 'https://lorempixel.com/250/250/?44096', 0, 93, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(463, 'https://lorempixel.com/250/250/?26372', 0, 93, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(464, 'https://lorempixel.com/250/250/?53693', 0, 93, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(465, 'https://lorempixel.com/250/250/?48299', 0, 93, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(466, 'https://lorempixel.com/250/250/?88504', 0, 94, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(467, 'https://lorempixel.com/250/250/?51751', 0, 94, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(468, 'https://lorempixel.com/250/250/?22622', 0, 94, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(469, 'https://lorempixel.com/250/250/?46298', 0, 94, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(470, 'https://lorempixel.com/250/250/?82588', 0, 94, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(471, 'https://lorempixel.com/250/250/?87007', 0, 95, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(472, 'https://lorempixel.com/250/250/?80553', 0, 95, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(473, 'https://lorempixel.com/250/250/?63489', 0, 95, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(474, 'https://lorempixel.com/250/250/?50051', 0, 95, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(475, 'https://lorempixel.com/250/250/?27318', 0, 95, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(476, 'https://lorempixel.com/250/250/?47532', 0, 96, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(477, 'https://lorempixel.com/250/250/?17953', 0, 96, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(478, 'https://lorempixel.com/250/250/?96100', 0, 96, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(479, 'https://lorempixel.com/250/250/?46536', 0, 96, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(480, 'https://lorempixel.com/250/250/?21410', 0, 96, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(481, 'https://lorempixel.com/250/250/?60404', 0, 97, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(482, 'https://lorempixel.com/250/250/?33153', 0, 97, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(483, 'https://lorempixel.com/250/250/?31068', 0, 97, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(484, 'https://lorempixel.com/250/250/?81759', 0, 97, '2020-04-13 21:15:14', '2020-04-13 21:15:14'),
(485, 'https://lorempixel.com/250/250/?46606', 0, 97, '2020-04-13 21:15:15', '2020-04-13 21:15:15'),
(486, 'https://lorempixel.com/250/250/?48780', 0, 98, '2020-04-13 21:15:15', '2020-04-13 21:15:15'),
(487, 'https://lorempixel.com/250/250/?88184', 0, 98, '2020-04-13 21:15:15', '2020-04-13 21:15:15'),
(488, 'https://lorempixel.com/250/250/?23868', 0, 98, '2020-04-13 21:15:15', '2020-04-13 21:15:15'),
(489, 'https://lorempixel.com/250/250/?95504', 0, 98, '2020-04-13 21:15:15', '2020-04-13 21:15:15'),
(490, 'https://lorempixel.com/250/250/?27797', 0, 98, '2020-04-13 21:15:15', '2020-04-13 21:15:15'),
(491, 'https://lorempixel.com/250/250/?35030', 0, 99, '2020-04-13 21:15:15', '2020-04-13 21:15:15'),
(492, 'https://lorempixel.com/250/250/?31474', 0, 99, '2020-04-13 21:15:15', '2020-04-13 21:15:15'),
(493, 'https://lorempixel.com/250/250/?29093', 0, 99, '2020-04-13 21:15:15', '2020-04-13 21:15:15'),
(494, 'https://lorempixel.com/250/250/?51053', 0, 99, '2020-04-13 21:15:15', '2020-04-13 21:15:15'),
(495, 'https://lorempixel.com/250/250/?58723', 0, 99, '2020-04-13 21:15:15', '2020-04-13 21:15:15'),
(496, 'https://lorempixel.com/250/250/?37482', 0, 100, '2020-04-13 21:15:15', '2020-04-13 21:15:15'),
(497, 'https://lorempixel.com/250/250/?93561', 0, 100, '2020-04-13 21:15:15', '2020-04-13 21:15:15'),
(498, 'https://lorempixel.com/250/250/?69937', 0, 100, '2020-04-13 21:15:15', '2020-04-13 21:15:15'),
(499, 'https://lorempixel.com/250/250/?98736', 0, 100, '2020-04-13 21:15:15', '2020-04-13 21:15:15'),
(500, 'https://lorempixel.com/250/250/?34450', 0, 100, '2020-04-13 21:15:15', '2020-04-13 21:15:15'),
(502, '5e949c2c599cf5e936e721a9ca1.jfif', 0, 1, '2020-04-13 22:06:52', '2020-04-13 23:51:49'),
(503, '5e949c40d6e5b5e936fc6ab9d02.jfif', 1, 1, '2020-04-13 22:07:12', '2020-04-13 23:51:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'carlos zambrano', 'carlos@gmail.com', NULL, '$2y$10$kFYzudhQIEeX7V9UkAgl5.0/M58H6u0NLtwJvzYx0YZVU3HJ9Mhxe', 1, NULL, NULL, NULL),
(2, 'darlis', 'darlis@gmail.com', NULL, '$2y$10$jpz.FVH6xO92LGuRD5Pqdenn/tEwtEByeEYNbagPF.txaEyMXhbyS', 0, NULL, '2020-04-14 00:34:11', '2020-04-14 00:34:11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `cart_datails`
--
ALTER TABLE `cart_datails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_datails_cart_id_foreign` (`cart_id`),
  ADD KEY `cart_datails_producto_id_foreign` (`producto_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `producto_imagens`
--
ALTER TABLE `producto_imagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_imagens_producto_id_foreign` (`producto_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cart_datails`
--
ALTER TABLE `cart_datails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `producto_imagens`
--
ALTER TABLE `producto_imagens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=504;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `cart_datails`
--
ALTER TABLE `cart_datails`
  ADD CONSTRAINT `cart_datails_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `cart_datails_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `producto_imagens`
--
ALTER TABLE `producto_imagens`
  ADD CONSTRAINT `producto_imagens_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE;
COMMIT;

