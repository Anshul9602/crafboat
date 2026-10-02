SELECT b.banner_id, b.name, b.status, bi.title, bi.image
FROM oc_banner b
LEFT JOIN oc_banner_image bi ON b.banner_id = bi.banner_id AND bi.language_id = 1
ORDER BY CASE WHEN b.name = 'Homepage' THEN 0 ELSE 1 END, b.name;
