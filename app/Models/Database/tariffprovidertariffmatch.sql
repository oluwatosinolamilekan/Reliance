CREATE TABLE tariff_provider_tariff_match (
    task_id INT,
    tarrif_id TINYINT NOT NULL,
    provider_tarrif_id TINYINT,
    user_id TINYINT NOT NULL,
    priority TINYINT NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    active_status Boolean DEFAULT 0,
);