-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th9 23, 2021 lúc 04:09 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `Fitness_luat2001`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_08_24_163229_create_tbl_posts_table', 1),
(7, '2021_08_26_214904_create_tbl_packs_table', 1),
(8, '2021_08_27_173916_create_tbl_contact_table', 1),
(9, '2021_08_31_035243_create_tbl_blog_table', 1),
(10, '2021_09_06_195735_create_sessions_table', 1),
(11, '2021_09_07_170820_create_tbl_carts_table', 1),
(12, '2021_09_09_204101_create_tbl_videos_table', 1),
(13, '2021_09_13_161259_create_tbl_discountcode_table', 1),
(14, '2021_09_15_155423_create_tbl_users_table', 2),
(15, '2021_09_15_232636_create_tbl_discountcode_table', 3),
(16, '2021_09_19_010418_create_tbl_contact_table', 4),
(17, '2021_09_19_011440_create_tbl_contact_table', 5),
(18, '2021_09_19_011706_create_tbl_carts_table', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('RZbAAANyOWDh9ghrgPxiXq4OI8CTH79UOyI7ne4A', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidHdKQXFRYkJrWmNpR2djUDJsbU56bjJFY1RWMll3d0hVcFJUa2lkQiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1632298863),
('TG5M3lpEm4O4hrYTWEFS2dZToKbY5Lkg6GgG8nZy', 5, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoidldjZm1WTkd5azJnbzZXcFpmbHJhdjhNMnhoSTM3VFhQa3pzUlNXZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90cmFuZy1jaHUiO31zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJDRldUV0OE5aMEd0QXpycmJsUUpXNnUudElMNWt5aFk4UDBuSm5CYjF4d2hFZWd5aXBLVXRhIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQ0ZXVFdDhOWjBHdEF6cnJibFFKVzZ1LnRJTDVreWhZOFAwbkpuQmIxeHdoRWVneWlwS1V0YSI7fQ==', 1632073964),
('Tk3G6Xt9hvB6vdVr1emDlUBA4w9sNvl35YGYN37N', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUVdNT0pJOXRYMnBrZzdsd2xPbGFRaHZ2ODMxc3d6cUk0TFl5SXRQMSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1632279857),
('uri6WhJZBfUHyaxfDcmmwXs7sQG9tmgyJJ8Gsbbq', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOHBCZ3I4Q3ZQUlB3QnF4WjY4TFowSkdUOWcwQktHWlB1SGc0MlBVMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RlcnVzZXJzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1632299164),
('Y52ldT2i1q3kEbMShxvHbUU8WZ1tssbqUzsmLV5L', 5, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoibm1HN0dMY0FSekdsWmpxOVRpWjY2cDZSSWlPOHByWUg0emFEcVQxbyI7czozOiJ1cmwiO2E6MDp7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvdHJhbmctY2h1Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJDRldUV0OE5aMEd0QXpycmJsUUpXNnUudElMNWt5aFk4UDBuSm5CYjF4d2hFZWd5aXBLVXRhIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQ0ZXVFdDhOWjBHdEF6cnJibFFKVzZ1LnRJTDVreWhZOFAwbkpuQmIxeHdoRWVneWlwS1V0YSI7fQ==', 1632111165);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `post_title`, `post_category`, `post_image`, `post_content`, `post_link`, `created_at`, `updated_at`) VALUES
(2, 'REVIEW 4 PHÒNG TẬP GYM NÊN ĐĂNG KÝ NGAY', 'Phòng tập', 'gym-phu-nhuan.jpeg', 'Dưới đây chúng tôi sẽ giúp bạn tìm kiếm phòng tập chất lượng với mức giá hợp lý...', 'https://leep.app/blog/review/gym-phu-nhuan.html', '2021-09-15 02:24:19', '2021-09-18 09:44:10'),
(3, 'TỔNG HỢP ĐỊA CHỈ HỌC TỐT NHẤT NĂM 2021', 'Phòng tập', 'gallery-12.jpg', 'Tổng hợp địa chỉ học boxing tốt nhất năm 2021 Boxing là bộ môn rèn luyện sức khỏe, kỹ năng vô cùng hiệu quả được nhiều người lựa chọn nhé!', 'https://leep.app/blog/review/boxing-go-vap.html', '2021-09-15 02:28:12', '2021-09-15 02:28:12'),
(4, 'DƯỚI 500.000 ĐỒNG NÊN CHỌN PHÒNG TẬP GYM NÀO?', 'Phòng tập', 'gym-quan-4.jpg', 'Bạn mong muốn cải thiện thân hình nhưng ngân ách không nhiều? Cùng chúng tôi khám phá 5 phòng tập gym giá trẻ ngay dưới đây.', 'https://leep.app/blog/review/gym-quan-4.html', '2021-09-15 02:29:51', '2021-09-15 02:29:51'),
(5, 'TẬP GYM CHỌN PHÒNG TẬP NÀO THÌ TỐT?', 'Phòng tập', 'gym-cu-chi.jpg', 'Bạn muốn tìm phòng gym để đến tập luyện nhưng chưa tìm ra? liệt kê một số địa điểm để bạn lựa chọn nhé.', 'https://leep.app/blog/review/gym-cu-chi.html', '2021-09-15 02:30:29', '2021-09-15 02:30:29'),
(6, 'CÂU LẠC BỘ GYM HIỆN ĐẠI, CHẤT LƯỢNG ?', 'Phòng tập', 'cau-lac-bo-gym-binh-thanh.jpg', 'Câu lạc bộ gym Bình Thạnh hiện đại, chất lượng Phòng tập chất lượng, dịch vụ tốt...', 'https://leep.app/blog/review/gym-binh-thanh.html', '2021-09-15 02:31:27', '2021-09-15 02:31:27'),
(7, '4 CÁI TÊN “SÁNG GIÁ” NÊN THỬ KHI HỌC BOXING', 'Phòng tập', 'boxng-tan-binh.jpg', 'Nên thử khi học boxing ,không khó để bạn có thể tìm một địa chỉ học boxing ...', 'https://leep.app/blog/review/boxing-tan-binh.html', '2021-09-15 02:32:13', '2021-09-15 02:32:13'),
(8, 'CHÈ DƯỠNG NHAN CÓ AN TOÀN?', 'Dinh dưỡng', 'che-duong-nhan_001.jpg', 'Chè dưỡng nhan có công dụng tốt thế nào và tại sao...', 'https://leep.app/blog/dinh-duong/che-duong-nhan.html', '2021-09-15 02:50:56', '2021-09-15 02:50:56'),
(9, 'CÁCH NẤU XÔI GẤC DẺO NGON!', 'Dinh dưỡng', 'cach-nau-xoi-gac_001.jpg', 'Món xôi gấc đã không còn xa lạ trong ẩm thực Việt.', 'https://leep.app/blog/dinh-duong/cach-nau-xoi-gac.html', '2021-09-15 02:51:59', '2021-09-15 02:51:59'),
(10, 'Vitamin K có phải là Kali không?', 'Dinh dưỡng', 'vitamin-k-co-phai-la-kali-324x235.jpeg', 'Vitamin K và Kali là những vi chất dinh dưỡng thiết yếu mà cơ thể cần để phát triển và hoạt động bình thường. Cả hai có một số điểm chung, nhưng chúng không...', 'http://www.thehinh.com/2020/12/vitamin-k-co-phai-la-kali-khong.html', '2021-09-15 02:52:37', '2021-09-15 02:52:37'),
(11, 'Món ăn giúp bạn luôn tràn đầy năng lượng khi tập luyện', 'Dinh dưỡng', 'HIEU-SUAT-CAO-TRONG-TAP-LUYEN-1-324x235.jpeg', 'Loại thức ăn nào là tốt nhất để giúp hiệu suất tập luyện của bạn đạt tối đa ? Cho dù là chăm chỉ tại phòng tập thể dục hay tận hưởng một ngày cardio...', 'http://www.thehinh.com/2020/12/nhung-mon-an-giup-ban-luon-tran-day-nang-luong-khi-tap-luyen.html', '2021-09-15 02:53:23', '2021-09-15 02:53:23'),
(12, 'Chế độ ăn kiêng Pegan là gì? Tại sao bạn nên áp dụng ngay...', 'Dinh dưỡng', 'che-do-an-kieng-pegan-la-gi-1-324x235.jpeg', 'Chế độ ăn kiêng Pegan là một sự kết hợp giữa ăn chay và ăn mặn độc đáo. Bạn đã biết ăn kiêng theo một cách khoa học chưa? Trước hết tôi muốn bạn biết...', 'http://www.thehinh.com/2019/09/che-do-an-kieng-pegan-la-gi.html', '2021-09-15 02:54:25', '2021-09-15 02:54:25'),
(13, 'Các chất dinh dưỡng cho quan trọng người tập gym cần bổ sung', 'Dinh dưỡng', 'cac-chat-dinh-duong-can-thiet-khi-tap-gym-324x235.jpeg', 'Trong giới Gymbiz thì chúng ta vẫn thường nghe ăn uống chiếm 70% thành công, vậy thì tập gym nên ăn gì và những chất dinh dưỡng nào là quan trọng đối với người...', 'http://www.thehinh.com/2019/09/cac-chat-dinh-duong-cho-tap-gym.html', '2021-09-15 02:55:24', '2021-09-15 02:55:24'),
(14, 'Top 6 thực phẩm nhất định phải ăn để được sống lâu hơn', 'Dinh dưỡng', 'top-6-thuc-pham-nhat-dinh-phai-an-de-song-lau-hon.4jpg-324x235.jpg', 'Nghiên cứu cho thấy, những thực phẩm trong bữa ăn hằng ngày của bạn có thể là một trong những yếu tố quan trọng nhất để sống một cuộc sống lâu dài, khỏe mạnh....', 'http://www.thehinh.com/2019/09/top-6-thuc-pham-nhat-dinh-phai-an-de-duoc-song-lau-hon.html', '2021-09-15 02:56:04', '2021-09-15 02:56:04'),
(15, '7 lợi ích của dầu MCT', 'Dinh dưỡng', 'dau-mct-1-324x235.jpeg', 'Dầu MCT là chất bổ sung đã trở nên phổ biến đối với các vận động viên và những người tập thể hình. Sự phổ biến của dầu dừa, với hàm lượng MCT cao,...', 'http://www.thehinh.com/2020/12/loi-ich-cua-dau-mct.html', '2021-09-15 02:56:53', '2021-09-15 02:56:53'),
(16, 'HỖ TRỢ ĐIỀU TRỊ BỆNH ALZHEIMER?', 'Dinh dưỡng', 'thuc-pham-bo-sung-ho-tro-dieu-tri-benh-alzheimer.jpg', 'Liệu thực phẩm bổ sung có hỗ trợ điều trị bệnh Alzheimer?', 'https://leep.app/blog/dinh-duong/thuc-pham-bo-sung-ho-tro-dieu-tri-alzheimer.html', '2021-09-15 02:58:03', '2021-09-15 02:58:03'),
(17, 'LẦM TƯỞNG PHỔ BIẾN!', 'Dinh dưỡng', 'lam-tuong-ve-thuc-pham-bo-sung-001.jpg', 'Nếu có người thân mắc bệnh Alzheimer, bạn chắc...', 'https://leep.app/blog/dinh-duong/lam-tuong-ve-thuc-pham-bo-sung.html', '2021-09-15 02:58:43', '2021-09-15 02:58:43'),
(18, 'THỰC PHẨM TỐT DÀNH CHO TUỔI 40', 'Dinh dưỡng', '40-sieu-thuc-pham-danh-cho-nguoi-40-tuoi-00.jpg', '40 siêu thực phẩm tốt dành cho tuổi 40 Sau tuổi 40...', 'https://leep.app/blog/dinh-duong/sieu-thuc-pham-danh-cho-tuoi-40.html', '2021-09-15 03:00:01', '2021-09-15 03:00:01'),
(19, 'GIẢM CÂN HIỆU QUẢ NHẤT CHO TUỔI 40', 'Dinh dưỡng', '40-bi-quyet-giam-can-hieu-qua-cho-tuoi-40-01.jpg', 'Bí quyết giảm cân hiệu quả: Những món bạn nên thêm vào thực đơn', 'https://leep.app/blog/dinh-duong/bi-quyet-giam-can-hieu-qua-cho-tuoi-40.html', '2021-09-15 03:00:51', '2021-09-15 03:00:51'),
(20, 'Các thực phẩm và đồ uống giàu chất béo, muối và đường', 'Tiểu Đường', '20201115_052007_899975_5b2573cc5f32615d094df.max-110x110.jpg', 'Vì sao nên cắt giảm những thực phẩm, đồ uống giàu chất béo, muối và đường', 'https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-khoe/dinh-duong/cac-thuc-pham-va-do-uong-giau-chat-beo-muoi-va-duong/', '2021-09-15 03:12:02', '2021-09-15 03:12:02'),
(21, 'Các giai đoạn và đặc điểm của bệnh thận đái tháo đường', 'Tiểu Đường', '20190729_080405_416149_dau-than.max-110x110.jpg', 'Bệnh thận đái tháo đường là biến chứng mạn tính có thể gây tổn thương mạch máu nhỏ trong thận.', 'https://www.vinmec.com/vi/tieu-hoa-gan-mat/thong-tin-suc-khoe/cac-giai-doan-va-dac-diem-cua-benh-dai-thao-duong/', '2021-09-15 03:13:17', '2021-09-15 03:13:17'),
(22, 'bệnh nhân tiểu đường cần lưu ý gì?', 'Tiểu Đường', '20190430_075952_889126_mo_mau.max-110x110.jpg', 'Rối loạn lipid máu hay còn gọi là rối loạn mỡ máu và tiểu đường là các bệnh lý chuyển hóa rất hay...', 'https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-khoe/dieu-tri-roi-loan-mo-mau-o-benh-nhan-tieu-duong-can-luu-y-gi/', '2021-09-15 03:14:06', '2021-09-15 03:14:06'),
(23, 'Trong cafe có những chất gì?', 'Tiểu Đường', '20200303_134702_068698_keto-cafe.max-110x110.jpg', 'Cà phê là một thức uống được làm từ hạt cà phê. Mọi người thường uống cà phê để giảm mệt mỏi về tinh thần và thể chất,..', 'https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-khoe/dinh-duong/trong-cafe-co-nhung-chat-gi/', '2021-09-15 03:17:42', '2021-09-15 03:17:42'),
(24, 'Bị tiểu đường có nên ăn nho?', 'Tiểu Đường', '20210302_033106_659301_tieu-duong-co-duoc-an.max-110x110.jpg', 'Bị tiểu đường có được ăn nho có lẽ là quan tâm và thắc mắc của nhiều người, bởi nho là loại trái cây vừa có', 'https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-khoe/dinh-duong/bi-tieu-duong-co-nen-nho/', '2021-09-15 03:35:59', '2021-09-15 03:35:59'),
(25, 'Bị tiểu đường phải uống thuốc suốt đời?', 'Tiểu Đường', '20191231_131633_481442_uong-thuoc.max-110x110.png', 'Bài viết được tư vấn chuyên môn bởi Thạc sĩ, Bác sĩ Vũ Thị Duyên - Bác sĩ Thận - Nội tiết', 'https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-khoe/suc-khoe-tong-quat/bi-tieu-duong-phai-uong-thuoc-suot-doi/', '2021-09-15 03:36:46', '2021-09-15 03:36:46'),
(26, 'Mắc bệnh tiểu đường có được uống rượu không?', 'Tiểu Đường', '20200503_082055_994134_bi-tieu-duong-co-uong.max-800x800.jpg', 'Đối với một số người, uống rượu ở mức vừa phải được cho là có lợi cho sức khỏe. Tuy nhiên,...', 'https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-khoe/suc-khoe-tong-quat/mac-benh-tieu-duong-co-duoc-uong-ruou-khong/', '2021-09-15 03:37:37', '2021-09-15 03:37:37'),
(27, 'Những loại hoa quả tốt cho người tiểu đường', 'Tiểu Đường', '20201115_052007_899975_5b2573cc5f32615d094df.max-110x110.jpg', 'Đa số mọi người vẫn luôn cho rằng việc ăn hoa quả khiến đường huyết tăng nên đã loại bỏ hoa quả khỏi chế độ ăn hàng ngày.', 'https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-khoe/nhung-loai-hoa-qua-tot-cho-nguoi-tieu-duong/', '2021-09-16 00:35:10', '2021-09-16 00:35:10'),
(28, 'Biến chứng suy thận ở bệnh nhân tiểu đường', 'Tiểu Đường', '20190729_074918_730882_237754-15238969597612.max-110x110.jpg', 'Bệnh thận đái tháo đường là một trong những biến chứng nguy hiểm mà bệnh nhân tiểu đường có thể mắc phải', 'https://www.vinmec.com/vi/tieu-hoa-gan-mat/thong-tin-suc-khoe/bien-chung-suy-o-benh-nhan-tieu-duong/', '2021-09-16 00:36:19', '2021-09-16 00:36:19'),
(29, 'Ăn kiêng ở người bệnh tiểu đường: Những điều cần biết', 'Tiểu Đường', '20190620_145152_506496_Thay-nhung-dau-hieu-n.max-110x110.jpg', 'Nhiều người cho rằng ăn kiêng nghĩa là nhịn ăn trong một khoảng thời gian hoặc cắt giảm mạnh mẽ khẩu phần ăn để có một sức khỏe tốt hơn', 'https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-khoe/an-kieng-o-nguoi-benh-tieu-duong-nhung-dieu-can-biet/', '2021-09-16 00:37:58', '2021-09-16 00:37:58'),
(30, 'Các biến chứng tim mạch trên bệnh nhân tiểu đường', 'Tiểu Đường', '20190626_091700_701901_20181223-bien-chung-k.max-110x110.jpg', 'Các biến chứng tim mạch trên bệnh nhân tiểu đường phần lớn do hậu quả của rối loạn chuyển hóa Lipid,', 'https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-khoe/cac-bien-chung-tim-mach-tren-benh-nhan-tieu-duong/', '2021-09-16 00:38:33', '2021-09-16 00:38:33'),
(31, 'Nghiệm pháp dung nạp glucose', 'Tiểu Đường', '20190625_091521_436980_xet-nghiem-dung-nap-g.max-800x800.jpg', 'Tiểu đường thai kỳ đang là một nỗi ám ảnh lớn đối với phụ nữ có thai. Việc chẩn đoán bệnh là điều cần làm để tránh những biến..', 'https://www.vinmec.com/vi/tin-tuc/thong-tin-suc-khoe/nghiem-phap-dung-nap-glucose-nhin-bao-lau-truoc-khi-thuc-hien/', '2021-09-16 00:39:15', '2021-09-16 11:48:53'),
(35, 'Những điều cần lưu ý trong dinh dưỡng cho mẹ bầu béo phì🍎💪', 'Béo phì', 'ba-bau-beo-phi-0812.jpeg', 'Một chế độ dinh dưỡng hợp lý 🍎giúp cải thiện những hậu quả do thừa cân béo phì gây ra mà...', 'http://www.cpcs.vn/nhung-dieu-can-luu-y-trong-dinh-duong-cho-me-bau-beo-phi-d19496.html', '2021-09-16 16:41:55', '2021-09-17 06:18:41'),
(36, 'Đâu là chế độ ăn uống tốt nhất cho người cao tuổi?', 'Béo phì', 'dau-la-che-do-an-uong-tot-nhat-cho-nguoi-cao-tuoi-161737.jpeg', 'Chế độ ăn giàu protein và ít calo có thể giúp người cao tuổi bị béo phì giảm cân nhiều hơn...', 'http://www.cpcs.vn/dau-la-che-do-an-uong-tot-nhat-cho-nguoi-cao-tuoi-d17344.html', '2021-09-16 16:43:34', '2021-09-16 16:43:34'),
(37, 'Nguyên nhân gây ra thừa cân béo phì', 'Béo phì', 'beo-phi-1047.jpeg', 'Cùng với bệnh tăng huyết áp, đái tháo đường, ung thư thì thừa cân béo phì hiện đang được...', 'http://www.cpcs.vn/nguyen-nhan-gay-ra-thua-can-beo-phi-d14982.html', '2021-09-16 16:48:43', '2021-09-16 16:48:43'),
(38, 'Béo phì ở người cao tuổi và những hệ lụy', 'Béo phì', 'beo-phi-o-nguoi-cao-tuoi-0915.jpeg', 'Bệnh béo phì ở người cao tuổi làm cơ thể mất cân đối, nặng nề, chậm chạp... Tác hại...', 'http://www.cpcs.vn/beo-phi-o-nguoi-cao-tuoi-va-nhung-he-luy-d14979.html', '2021-09-16 16:49:43', '2021-09-16 16:49:43'),
(39, 'Dinh dưỡng và vận động cho người cao tuổi bị béo phì', 'Béo phì', 'dinh-duong-va-van-dong-cho-nguoi-cao-tuoi-bi-beo-phi-141530.jpeg', 'Chế độ dinh dưỡng quá dư thừa cùng l', 'http://www.cpcs.vn/dinh-duong-va-van-dong-cho-nguoi-cao-tuoi-bi-beo-phi-d15348.html', '2021-09-16 16:50:50', '2021-09-16 16:50:50'),
(40, 'Lý do những người béo phì có nguy cơ bị nặng do Covid-19', 'Béo phì', 'beophi-1642.jpeg', 'Lý do những người béo phì có nguy cơ bị nặng do Covid-19', 'http://www.cpcs.vn/ly-do-nhung-nguoi-beo-phi-co-nguy-co-bi-nang-do-covid-19-d16404.html', '2021-09-16 16:51:40', '2021-09-16 16:51:40'),
(41, 'Chuyên gia cảnh báo nguy cơ tử vong do thừa cân, béo phì', 'Béo phì', 'chuyen-gia-canh-bao-nguy-co-tu-vong-do-thua-can-beo-phi-101456.jpeg', 'Theo Tổ chức Y tế thế giới, thừa cân béo phì nghĩa là tình trạng tích lũy mỡ quá mức và không bình thường tại một vùng cơ thể hay toàn thân gây ra nhiều nguy hại tới sức khỏe', 'http://www.cpcs.vn/chuyen-gia-canh-bao-nguy-co-tu-vong-do-thua-can-beo-phi-d18751.html', '2021-09-16 16:52:54', '2021-09-16 16:52:54'),
(42, 'Nguyên nhân khiến bạn chỉ ăn trái cây vẫn bị béo phì, tăng cân', 'Béo phì', 'an-trai-cay-van-tang-can-1122.jpeg', 'Không phải loại trái cây nào cũng có tác dụng giảm cân, đặc biệt là các loại trái cây chín.', 'http://www.cpcs.vn/nguyen-nhan-khien-ban-chi-an-trai-cay-van-bi-beo-phi-tang-can-d12504.html', '2021-09-16 16:53:42', '2021-09-16 16:53:42'),
(43, 'Trẻ được nuôi bằng sữa công thức có nguy cơ cao mắc béo phì.', 'Béo phì', 'tre-beo-phi-0643.jpeg', 'Trẻ em chỉ sử dụng sữa công thức có nguy cơ béo phì cao hơn 25% so với trẻ em được nuôi bằng...', 'http://www.cpcs.vn/tre-duoc-nuoi-bang-sua-cong-thuc-co-nguy-co-cao-mac-beo-phi-d9235.html', '2021-09-16 16:54:32', '2021-09-16 16:54:32'),
(48, 'THỬ SỨC VỚI 7 BÀI TẬP GIẢM MỠ ĐÙI TRONG', 'Fitness', '10-bai-tap-tac-dong-vung-dui-trong-chay-xe_007.jpg', 'Vùng đùi trong là một trong những vùng cơ dễ bị bỏ quên nhất. Phần lớn thời gian...', 'https://leep.app/blog/fitness/bai-tap-giam-mo-dui-trong.html', '2021-09-17 04:19:18', '2021-09-17 04:19:18'),
(49, 'ĐẨY LÙI CẰM ĐÔI NHANH CHÓNG TẠI NHÀ', 'Fitness', 'day-lui-cam-doi_006.jpg', 'Khi một người có cằm đôi, thường bị cho là do tăng cân hay béo phì.', 'https://leep.app/blog/fitness/day-lui-cam-doi.html', '2021-09-17 04:20:23', '2021-09-17 04:20:23'),
(50, '5 BÀI TẬP MOBILITY DRILL GIÚP CẢI THIỆN ĐỘ LINH HOẠT', 'Fitness', 'bai-tap-mobility-drill.jpg', 'Bạn có thường gặp khó khăn và cơn đau khi đi bộ, di chuyển nhanh hoặc chạy bộ?', 'https://leep.app/blog/fitness/bai-tap-mobility-drill.html', '2021-09-17 04:21:11', '2021-09-17 04:21:11'),
(51, 'GÃY CHÂN: CÁCH ĐIỀU TRỊ', 'Fitness', 'gay-chan.jpg', 'Gãy chân là tình trạng tổn thương nghiêm trọng gây ra khi có lực tác động mạnh khiến xương chân bị gãy hoặc nứt.', 'https://leep.app/blog/fitness/gay-chan.html', '2021-09-17 04:22:03', '2021-09-17 04:22:03'),
(52, '6 ĐIỀU NÊN VÀ KHÔNG NÊN LÀM', 'Fitness', 'tap-the-duc-giam-can_006.jpg', 'Tập thể dục giảm cân là một lựa chọn khôn ngoan để có thể giảm đi lượng mỡ thừa và rèn luyện cơ thể khỏe mạnh.', 'https://leep.app/blog/fitness/tap-the-duc-giam-can.html', '2021-09-17 04:23:04', '2021-09-17 04:23:04'),
(53, '6 BÀI TẬP PILATES GIẢM MỠ BỤNG NHANH CHÓNG', 'Fitness', 'bai-tap-pilates-giam-mo-bung_007.jpg', 'Một vòng eo thon hay vùng bụng phẳng lì là mục tiêu lý tưởng của rất nhiều cô gái.', 'https://leep.app/blog/fitness/bai-tap-pilates-giam-mo-bung.html', '2021-09-17 04:23:56', '2021-09-17 04:23:56'),
(54, '5 mẹo nhỏ để nâng cao kỹ thuật bơi sải', 'Fitness', 'nang-cao-ky-thuat-boi-sai_001.jpg', 'Để đảm bảo bạn đang tận dụng tối đa thời gian của mình trong bể bơi', 'https://leep.app/blog/the-thao-giai-tri/nang-cao-ky-thuat-boi-sai.html', '2021-09-17 04:24:43', '2021-09-17 04:24:43'),
(55, 'THỎA SỨC “THÁCH THỨC GIỚI HẠN”', 'Fitness', 'wakeboarding.jpg', 'môn thể thao trên nước khá mới mẻ tại Việt Nam. Dưới đây ...', 'https://leep.app/blog/the-thao-giai-tri/wakeboarding.html', '2021-09-17 04:25:32', '2021-09-17 04:25:32'),
(56, 'BỎ TÚI 5 BƯỚC ĐỂ CHỌN GIÀY GOLF!!', 'Fitness', 'OMSEjqLb-giay-golf.jpg', 'Theo bước các Golfer trên sân tập chính là những đôi giày...', 'https://leep.app/blog/the-thao-giai-tri/giay-golf.html', '2021-09-17 04:27:22', '2021-09-17 04:27:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_carts`
--

CREATE TABLE `tbl_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_cardio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_swimming` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_yoga` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_zumba` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_massage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_boxing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_discountcode` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_carts`
--

INSERT INTO `tbl_carts` (`id`, `post_category`, `post_price`, `post_month`, `post_cardio`, `post_swimming`, `post_yoga`, `post_zumba`, `post_massage`, `post_boxing`, `post_name`, `post_email`, `post_phone`, `post_adress`, `post_discountcode`, `created_at`, `updated_at`) VALUES
(1, 'pro', '600000', '1', '5 Cardio Classes', '10 Swimming Classes', '5 Yoga Classes', '3 Zumba Classes', '10 Massage Classes', '10 Boxing Classes', 'Nguyễn Công Luật', 'luatncth2007024@fpt.edu.vn', '21212', 'Hà Nội', NULL, '2021-09-19 01:18:44', '2021-09-19 01:18:44'),
(2, 'pro', '570000', '1', '5 Cardio Classes', '10 Swimming Classes', '5 Yoga Classes', '3 Zumba Classes', '10 Massage Classes', '10 Boxing Classes', 'Ha Linh', 'linhncth2007022@fpt.edu.vn', '0334629888', 'Hà Nội', 'TH2007024', '2021-09-19 14:04:41', '2021-09-19 14:04:41'),
(3, 'pro', '600000', '1', '5 Cardio Classes', '10 Swimming Classes', '5 Yoga Classes', '3 Zumba Classes', '10 Massage Classes', '10 Boxing Classes', 'Tran Minh Huyen', 'tranminhhuyen@fpt.edu.vn', '0334629666', 'Yên bái', NULL, '2021-09-19 14:05:31', '2021-09-19 14:05:31'),
(5, 'pro', '570000', '1', '5 Cardio Classes', '10 Swimming Classes', '5 Yoga Classes', '3 Zumba Classes', '10 Massage Classes', '10 Boxing Classes', 'Phan Luat', 'luatphan2001@fpt.edu.vn', '0334880902', 'Hà Nội', 'TH2007024', '2021-09-19 14:07:07', '2021-09-19 14:07:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_repcomment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_view` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `post_name`, `post_age`, `post_adress`, `post_phone`, `post_comment`, `post_repcomment`, `post_view`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Công Luật', '21', 'Hà Nội', '09090910902', 'Bài viết trang web rất hữu ích cho sức khỏe hiện tại của tôi❤️', 'Cảm ơn bạn đã để lại lời nhắn!', '1', '2021-09-19 01:19:24', '2021-09-19 01:19:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_discountcode`
--

CREATE TABLE `tbl_discountcode` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_sale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_dayend` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_discountcode`
--

INSERT INTO `tbl_discountcode` (`id`, `post_name`, `post_code`, `post_sale`, `post_dayend`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Công luật', 'TH2007024', '5', '2021-09-30', NULL, '2021-09-17 02:21:05'),
(6, 'Nguyễn Công Luật', 'TH200702SRC', '35', '2021-10-02', '2021-09-16 03:48:11', '2021-09-17 02:21:13'),
(7, 'Nguyễn Công Luật', 'NCTH2007024', '15', '2021-09-30', '2021-09-16 03:49:42', '2021-09-16 03:49:42'),
(10, 'Nguyễn Công Luật', 'TH2007024NCLUAT', '10', '2021-10-15', '2021-09-17 02:20:01', '2021-09-17 02:20:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_packs`
--

CREATE TABLE `tbl_packs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_cardio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_swimming` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_yoga` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_zumba` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_massage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_boxing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_packs`
--

INSERT INTO `tbl_packs` (`id`, `post_category`, `post_price`, `post_month`, `post_cardio`, `post_swimming`, `post_yoga`, `post_zumba`, `post_massage`, `post_boxing`, `created_at`, `updated_at`) VALUES
(2, 'Normal', '300000', '1', '5 Cardio Classes', '05 Swimming Classes', '5 Yoga Classes', '3 Zumba Classes', '3 Massage Classes', '5 Body Building', '2021-09-15 01:20:43', '2021-09-17 01:43:21'),
(3, 'pro', '600000', '1', '5 Cardio Classes', '10 Swimming Classes', '5 Yoga Classes', '3 Zumba Classes', '10 Massage Classes', '10 Boxing Classes', '2021-09-15 01:32:42', '2021-09-15 01:32:42'),
(4, 'Normal', '300000', '1', '5 Cardio Classes', '05 Swimming Classes', '5 Yoga Classes', '3 Zumba Classes', '3 Massage Classes', '4 Boxing Classes', '2021-09-15 01:35:17', '2021-09-17 01:43:40'),
(5, 'Normal', '250000', '1', '5 Cardio Classes', '05 Swimming Classes', '5 Yoga Classes', '3 Zumba Classes', '5 Massage Classes', '10 Boxing Classes', '2021-09-15 01:37:23', '2021-09-17 01:43:49'),
(6, 'Normal', '900000', '3', '15 Cardio Classes', '15 Swimming Classes', '15 Yoga Classes', '10 Zumba Classes', '15 Massage Classes', '30 Boxing Classes', '2021-09-15 01:39:49', '2021-09-15 01:41:31'),
(7, 'pro', '1800000', '3', '25 Cardio Classes', '45 Swimming Classes', '25 Yoga Classes', '40 Zumba Classes', '25 Massage Classes', '35 Boxing Classes', '2021-09-15 01:41:17', '2021-09-15 01:41:17'),
(8, 'bassic', '900000', '3', '25 Cardio Classes', '25 Swimming Classes', '15 Yoga Classes', '20 Zumba Classes', '15 Massage Classes', '25 Boxing Classes', '2021-09-15 01:42:37', '2021-09-15 01:42:37'),
(9, 'sale off', '750000', '3', '25 Cardio Classes', '25 Swimming Classes', '15 Yoga Classes', '20 Zumba Classes', '22 Massage Classes', '30 Boxing Classes', '2021-09-15 01:43:29', '2021-09-15 01:43:29'),
(10, 'Normal', '1800000', '6', '50 Cardio Classes', '50 Swimming Classes', '35 Yoga Classes', '45 Zumba Classes', '48 Massage Classes', '65 Boxing Classes', '2021-09-15 01:46:11', '2021-09-15 01:49:15'),
(11, 'pro', '3600000', '6', '70 Cardio Classes', '90 Swimming Classes', '55 Yoga Classes', '65 Zumba Classes', '88 Massage Classes', '76 Boxing Classes', '2021-09-15 01:47:13', '2021-09-15 01:47:13'),
(12, 'bassic', '1800000', '6', '55 Cardio Classes', '45 Swimming Classes', '38 Yoga Classes', '48 Zumba Classes', '44 Massage Classes', '36 Boxing Classes', '2021-09-15 01:48:03', '2021-09-15 01:48:03'),
(13, 'sale off', '1400000', '6', '55 Cardio Classes', '48 Swimming Classes', '42 Yoga Classes', '50 Zumba Classes', '54 Massage Classes', '46 Boxing Classes', '2021-09-15 01:49:01', '2021-09-15 01:49:01'),
(14, 'sale off', '2800000', '12', '120 Cardio Classes', '99 Swimming Classes', '90 Yoga Classes', '110 Zumba Classes', '120 Massage Classes', '100 Boxing Classes', '2021-09-15 01:56:21', '2021-09-17 02:29:55'),
(15, 'bassic', '3600000', '12', '110 Cardio Classes', '90 Swimming Classes', '88 Yoga Classes', '105 Zumba Classes', '104 Massage Classes', '96 Boxing Classes', '2021-09-15 01:57:15', '2021-09-15 01:57:15'),
(16, 'pro', '6200000', '12', '210 Cardio Classes', '180 Swimming Classes', '178 Yoga Classes', '210 Zumba Classes', '198 Massage Classes', '208 Boxing Classes', '2021-09-15 01:58:15', '2021-09-15 01:58:15'),
(17, 'sale off', '3600000', '12', '100 Cardio Classes', '85 Swimming Classes', '80 Yoga Classes', '95 Zumba Classes', '088 Massage Classes', '98 Boxing Classes', '2021-09-15 01:58:53', '2021-09-17 00:03:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_introduce` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_experience` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_posts`
--

INSERT INTO `tbl_posts` (`id`, `post_name`, `post_age`, `post_image`, `post_introduce`, `post_experience`, `created_at`, `updated_at`) VALUES
(1, 'Trần Hoàng', '21', 'gallery-3.jpg', 'ha noi', '5', '2021-09-14 23:51:51', '2021-09-18 00:28:53'),
(2, 'Khánh Linh', '27', 'gallery-9.jpg', 'HA NOI', '5', '2021-09-15 01:04:42', '2021-09-18 00:29:19'),
(3, 'Công Luật', '20', '25C338A8-A423-455F-B15A-56BF40FF56B2_Original.jpg', 'Aptech HN', '5', '2021-09-15 01:05:33', '2021-09-18 00:29:37'),
(4, 'Trần Huyền', '24', 'trainer-1.jpg', 'HA NAM', '5', '2021-09-15 01:06:24', '2021-09-18 00:29:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_repeatpassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `post_name`, `post_phone`, `post_email`, `post_password`, `post_repeatpassword`, `created_at`, `updated_at`) VALUES
(4, 'Hà Thùy Linh', '0386358888', 'thuylinh27021998@gmail.com', '12345678', '12345678', '2021-09-18 02:23:35', '2021-09-18 02:23:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_videos`
--

CREATE TABLE `tbl_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_videos`
--

INSERT INTO `tbl_videos` (`id`, `post_title`, `post_category`, `post_image`, `post_content`, `post_link`, `created_at`, `updated_at`) VALUES
(9, '25 PHÚT AEROBIC CỰC BỐC | GIẢM CÂN HIỆU QUẢ NHẤT 💪| GIẢM MỠ THẦN TỐC | VIỆT THỦY AEROBICS🦾', 'Giảm cân', NULL, '25 PHÚT AEROBIC CỰC BỐC | GIẢM CÂN HIỆU QUẢ NHẤT💪 | GIẢM MỠ THẦN TỐC | VIỆT THỦY AEROBICS🦾', 'WrVK_gmoJto', '2021-09-16 17:07:08', '2021-09-17 06:15:25'),
(13, 'GIẢM MỠ CỨNG ĐẦU Ở BỤNG DƯỚI🏆', 'Giảm cân', NULL, 'Trong video này mình sẽ hướng dẫn cho bạn 4 động tác từ dễ tới khó để có thể tập BỤNG DƯỚI 1 cách hiệu quả .🏆', 'zp5LJufXZkA', '2021-09-17 05:36:18', '2021-09-17 06:15:48'),
(14, 'Giảm Cân Nhanh Hiệu Quả Trong 10 Ngày🥇', 'Giảm cân', NULL, 'Giảm Cân Nhanh Hiệu Quả Trong 10 Ngày | Bài Tập Giúp bạn Giảm Cân, Giảm Mỡ Tốt Nhất🥇', 'Vh2mAsbjZiU', '2021-09-17 05:36:45', '2021-09-17 06:16:06'),
(15, '15 phút HIIT siêu đốt mỡ tại nhà | Đốt mỡ toàn thân hiệu quả🎫', 'Giảm cân', NULL, '15 phút HIIT siêu đốt mỡ tại nhà | Đốt mỡ toàn thân hiệu quả🎫', 'GINvkb9nFcU', '2021-09-17 05:37:17', '2021-09-17 06:16:25'),
(16, 'Bài tập 5 PHÚT giảm mỡ bụng dưới hiệu quả | Mia Vu', 'Giảm cân', NULL, 'Bài tập 5 PHÚT giảm mỡ bụng dưới hiệu quả | Mia Vu', 'UFG52vRNWjQ', '2021-09-17 05:37:43', '2021-09-17 05:37:43'),
(17, 'Bài tập giảm mỡ toàn thân ✅ Dance Cardio 15 phút đốt 700 calo ✅ Giảm cân tại nhà', 'Giảm cân', NULL, 'Bài tập giảm mỡ toàn thân ✅ Dance Cardio 15 phút đốt 700 calo ✅ Giảm cân tại nhà', 'LwWEBTOMyRE', '2021-09-17 05:38:08', '2021-09-17 05:38:08'),
(18, 'BÀI TẬP CHÂN 10 PHÚT ✨ Giảm mỡ, thon gọn đùi 👯‍♀️ | Chau Bui Official', 'Giảm cân', NULL, 'BÀI TẬP CHÂN 10 PHÚT ✨ Giảm mỡ, thon gọn đùi 👯‍♀️ | Chau Bui Official', 'DugHLgr9Gdg', '2021-09-17 05:38:33', '2021-09-17 05:38:33'),
(19, 'Bí Quyết để Châu GIẢM CÂN thành công mà Bạn Nên Biết! My secrets to LOSE WEIGHT & MAINTAIN IT!', 'Giảm cân', NULL, 'Bí Quyết để Châu GIẢM CÂN thành công mà Bạn Nên Biết! My secrets to LOSE WEIGHT & MAINTAIN IT!', 'qhRDYFFaQ7w', '2021-09-17 05:39:06', '2021-09-17 05:39:06'),
(20, 'GIẢM CÂN sau Tết - Bài tập lấy lại vóc dáng cực nhanh!', 'Giảm cân', NULL, 'GIẢM CÂN sau Tết - Bài tập lấy lại vóc dáng cực nhanh!', 'Bd7nD3yc9Zw', '2021-09-17 05:39:30', '2021-09-17 05:39:30'),
(21, '25 PHÚT BÀI TẬP CHO NGƯỜI KHÓ GIẢM CÂN | GIẢM MỠ HIỆU QUẢ NHẤT | GIẢM MỠ BỤNG NHANH | VIỆT THỦY #15', 'Giảm cân', NULL, '25 PHÚT BÀI TẬP CHO NGƯỜI KHÓ GIẢM CÂN | GIẢM MỠ HIỆU QUẢ NHẤT | GIẢM MỠ BỤNG NHANH | VIỆT THỦY #15', 'LmHOZsY28LM', '2021-09-17 05:39:58', '2021-09-17 05:39:58'),
(22, '10 PHÚT GIẢM MỠ TOÀN THÂN| BÀI TẬP ĐỐT MỠ CỰC HIỆU QUẢ', 'Giảm cân', NULL, '10 PHÚT GIẢM MỠ TOÀN THÂN| BÀI TẬP ĐỐT MỠ CỰC HIỆU QUẢ', 'bSds42h2URA', '2021-09-17 05:40:20', '2021-09-17 05:40:20'),
(23, 'MÔNG QUẢ TÁO sau 2 tuần 🍎 | 6 ĐỘNG TÁC khắc phục MÔNG HÓP.', 'Tăng cơ', NULL, 'MÔNG QUẢ TÁO sau 2 tuần 🍎 | 6 ĐỘNG TÁC khắc phục MÔNG HÓP | SITA VLOG', 'nLMvTFZ38mU', '2021-09-17 05:40:44', '2021-09-17 05:44:27'),
(24, '20 PHÚT TẬP CƠ TOÀN THÂN TẠI NHÀ // không dụng cụ, không tiếng động // 125 calories // All level', 'Tăng cơ', NULL, '20 PHÚT TẬP CƠ TOÀN THÂN TẠI NHÀ // không dụng cụ, không tiếng động // 125 calories // All level', 'OBp_dvvWGBQ', '2021-09-17 05:41:09', '2021-09-17 05:44:34'),
(25, '7 Bài Tập Tốt Nhất Tại Nhà Cho Cơ Thang Lớn Hơn', 'Tăng cơ', NULL, '7 Bài Tập Tốt Nhất Tại Nhà Cho Cơ Thang Lớn Hơn', 'WcFeAQ2QzdY', '2021-09-17 05:41:48', '2021-09-17 05:41:48'),
(26, 'Đừng tới phòng gym nữa vì đã có 12 động tác plank tại nhà đây rồi!', 'Tăng cơ', NULL, 'Đừng tới phòng gym nữa vì đã có 12 động tác plank tại nhà đây rồi!', 'IDkw6ysCF5I', '2021-09-17 05:42:14', '2021-09-17 05:42:14'),
(27, '9 Bài Tập Bụng Tại Nhà Không Cần Dụng Cụ Cho Người Mới Tập', 'Tăng cơ', NULL, '9 Bài Tập Bụng Tại Nhà Không Cần Dụng Cụ Cho Người Mới Tập', 'Gcx0Q2BC23Y', '2021-09-17 05:42:39', '2021-09-17 05:42:39'),
(28, '7 Bài Tập Ngực To Dày Rộng Hiệu Quả Cho Dân Thể Hình', 'Tăng cơ', NULL, '7 Bài Tập Ngực To Dày Rộng Hiệu Quả Cho Dân Thể Hình', 'evv48zcUIoE', '2021-09-17 05:43:05', '2021-09-17 05:43:05'),
(29, 'Các Bài Tập Gym Toàn Thân Cho Nam Tại Nhà Mà Không Cần Dùng Đến Tạ - HOME WORKOUT', 'Tăng cơ', NULL, 'Các Bài Tập Gym Toàn Thân Cho Nam Tại Nhà Mà Không Cần Dùng Đến Tạ - HOME WORKOUT', 'oOZkie5GgaE', '2021-09-17 05:43:31', '2021-09-17 05:43:31'),
(30, 'Bài Tập MÔNG QUẢ ĐÀO siêu Hiệu Quả Tại Nhà #stayhome gym #withme', 'Tăng cơ', NULL, 'Bài Tập MÔNG QUẢ ĐÀO siêu Hiệu Quả Tại Nhà #stayhome gym #withme', 'iGeiEh_ZW2Q', '2021-09-17 05:43:57', '2021-09-17 05:43:57'),
(31, '8 Phút Cường Độ Cao Giảm 7kg Trong 1 Tuần | Bài Tập Đứng Không Đau Lưng', 'Giảm cân', NULL, '8 Phút Cường Độ Cao Giảm 7kg Trong 1 Tuần | Bài Tập Đứng Không Đau Lưng', 'CNtohhDNixk', '2021-09-17 06:24:23', '2021-09-17 06:24:23'),
(32, '6 bài tập GIẢM MỠ BỤNG hiệu quả mà không cần rời giường | AB EXERCISES IN BED | Happy Skin', 'Giảm cân', NULL, '6 bài tập GIẢM MỠ BỤNG hiệu quả mà không cần rời giường | AB EXERCISES IN BED | Happy Skin', 'j_lOKSBStbY', '2021-09-17 06:25:49', '2021-09-17 06:25:49'),
(33, '10 PHÚT HIIT GIẢM MỠ TẠI NHÀ | BÀI TẬP GIẢM MỠ HIỆU QUẢ NHẤT | WARZONE VLOG', 'Giảm cân', NULL, '10 PHÚT HIIT GIẢM MỠ TẠI NHÀ | BÀI TẬP GIẢM MỠ HIỆU QUẢ NHẤT | WARZONE VLOG', 'SYBmjLERRwc', '2021-09-17 06:26:47', '2021-09-17 06:26:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(5, 'Nguyễn Công Luật 2001', 'luatncth2007024@fpt.edu.vn', NULL, '$2y$10$4euEt8NZ0GtAzrrblQJW6u.tIL5kyhY8P0nJnBb1xwhEegyipKUta', NULL, NULL, NULL, NULL, NULL, '2021-09-17 23:50:20', '2021-09-20 00:36:24');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_carts`
--
ALTER TABLE `tbl_carts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_discountcode`
--
ALTER TABLE `tbl_discountcode`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_packs`
--
ALTER TABLE `tbl_packs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_videos`
--
ALTER TABLE `tbl_videos`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `tbl_carts`
--
ALTER TABLE `tbl_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_discountcode`
--
ALTER TABLE `tbl_discountcode`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_packs`
--
ALTER TABLE `tbl_packs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_videos`
--
ALTER TABLE `tbl_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
