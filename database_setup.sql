-- Categories table (placed first since it will be referenced by other tables)
CREATE TABLE categories (
    category_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL UNIQUE,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Users table (unchanged)
CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    full_name VARCHAR(100) NOT NULL,
    profile_picture VARCHAR(255),
    bio TEXT,
    is_admin BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Communities table (updated with category foreign key)
CREATE TABLE communities (
    community_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    category_id INT NOT NULL,
    creator_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (creator_id) REFERENCES users(user_id),
    FOREIGN KEY (category_id) REFERENCES categories(category_id)
);

-- Community members table (unchanged)
CREATE TABLE community_members (
    community_id INT,
    user_id INT,
    role ENUM('member', 'moderator', 'admin') DEFAULT 'member',
    joined_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (community_id, user_id),
    FOREIGN KEY (community_id) REFERENCES communities(community_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

-- Open discussions table (updated with category foreign key)
CREATE TABLE open_discussions (
    discussion_id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    category_id INT NOT NULL,
    max_participants INT NOT NULL,
    location VARCHAR(255) NOT NULL,
    latitude DECIMAL(10, 8),
    longitude DECIMAL(11, 8),
    start_time DATETIME NOT NULL,
    end_time DATETIME NOT NULL,
    creator_id INT NOT NULL,
    status ENUM('upcoming', 'ongoing', 'completed', 'cancelled') DEFAULT 'upcoming',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (creator_id) REFERENCES users(user_id),
    FOREIGN KEY (category_id) REFERENCES categories(category_id)
);

-- Open discussion participants table (unchanged)
CREATE TABLE discussion_participants (
    discussion_id INT,
    user_id INT,
    status ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',
    joined_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (discussion_id, user_id),
    FOREIGN KEY (discussion_id) REFERENCES open_discussions(discussion_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

-- Community events table (updated with category foreign key)
CREATE TABLE community_events (
    event_id INT PRIMARY KEY AUTO_INCREMENT,
    community_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    category_id INT NOT NULL,
    max_participants INT NOT NULL,
    location VARCHAR(255) NOT NULL,
    latitude DECIMAL(10, 8),
    longitude DECIMAL(11, 8),
    start_time DATETIME NOT NULL,
    end_time DATETIME NOT NULL,
    creator_id INT NOT NULL,
    status ENUM('upcoming', 'ongoing', 'completed', 'cancelled') DEFAULT 'upcoming',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (community_id) REFERENCES communities(community_id),
    FOREIGN KEY (creator_id) REFERENCES users(user_id),
    FOREIGN KEY (category_id) REFERENCES categories(category_id)
);

-- Community event participants table (unchanged)
CREATE TABLE event_participants (
    event_id INT,
    user_id INT,
    status ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',
    joined_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (event_id, user_id),
    FOREIGN KEY (event_id) REFERENCES community_events(event_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

-- Add indexes for better query performance
CREATE INDEX idx_discussions_category ON open_discussions(category_id);
CREATE INDEX idx_discussions_status ON open_discussions(status);
CREATE INDEX idx_community_events_status ON community_events(status);
CREATE INDEX idx_communities_category ON communities(category_id);