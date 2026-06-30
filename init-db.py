import sqlite3
import os

db_path = "/mnt/cos/artifacts/doctor-serial-system-db/database.sqlite"

# Connect to database
conn = sqlite3.connect(db_path)
cursor = conn.cursor()

# 1. Create Users Table
cursor.execute("""
CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT UNIQUE NOT NULL,
    password TEXT NOT NULL,
    fullName TEXT NOT NULL,
    role TEXT NOT NULL DEFAULT 'user',
    email TEXT,
    phone TEXT
)
""")

# 2. Create Doctors Table
cursor.execute("""
CREATE TABLE IF NOT EXISTS doctors (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    dept TEXT NOT NULL,
    time TEXT,
    room TEXT,
    active INTEGER DEFAULT 1
)
""")

# 3. Create Serials Table
cursor.execute("""
CREATE TABLE IF NOT EXISTS serials (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    serialNo INTEGER NOT NULL,
    doctorId INTEGER NOT NULL,
    patientName TEXT NOT NULL,
    patientAge INTEGER,
    patientPhone TEXT,
    problem TEXT,
    date TEXT NOT NULL,
    status TEXT NOT NULL DEFAULT 'waiting',
    userId INTEGER NOT NULL,
    createdAt TEXT NOT NULL,
    FOREIGN KEY(doctorId) REFERENCES doctors(id),
    FOREIGN KEY(userId) REFERENCES users(id)
)
""")

# 4. Seed Users
users = [
    (1, 'admin', 'admin123', 'Admin', 'admin', 'admin@hospital.com', '01700000000'),
    (2, 'user', 'user123', 'Moyej', 'user', 'user@gmail.com', '01800000000'),
    (3, 'Rana', 'rana123', 'Rana', 'admin', 'rana@hospital.com', '01900000000')
]
cursor.executemany("INSERT OR IGNORE INTO users VALUES (?, ?, ?, ?, ?, ?, ?)", users)

# 5. Seed Doctors
doctors = [
    (1, 'Asst. Prof. Dr. Be-Nazir Ahmmad', 'Medicine', 'সকাল ৯টা - ১টা', 'Room 101', 1),
    (2, 'Asst.Prof.Dr. Md. Asadul Islam Razib', 'Surgery', 'সকাল ১০টা - ২টা', 'Room 102', 1),
    (3, 'Asstt. Prof. Dr. Md. Azizul Islam', 'Cardiology', 'বিকাল ৩টা - ৭টা', 'Room 201', 1),
    (4, 'Dr. Abdullah Al-Mahfuj', 'Orthopedics', 'সকাল ৯টা - ১২টা', 'Room 301', 1),
    (5, 'Dr. H. M. Mamun (Shimul)', 'Neurology', 'সকাল ১০টা - ১টা', 'Room 202', 0),
    (6, 'Dr. Jamiul Alom Tomal', 'Pediatrics', 'বিকাল ৪টা - ৮টা', 'Room 401', 1),
    (7, 'Dr. Md. Al Mamun', 'Dermatology', 'সকাল ৮টা - ১২টা', 'Room 501', 1),
    (8, 'Dr. Md. Fozor Ali Lal', 'ENT', 'সকাল ৯টা - ১টা', 'Room 601', 1),
    (9, 'Dr. Md. Mosiur Rahman', 'Ophthalmology', 'বিকাল ৩টা - ৬টা', 'Room 701', 1),
    (10, 'Dr. Md. Rakibuzzaman Chowdhury', 'Urology', 'সকাল ১০টা - ২টা', 'Room 801', 0),
    (11, 'Dr. Md. Shahadut Hossain Alim', 'Gastroenterology', 'সকাল ৯টা - ১টা', 'Room 901', 1),
    (12, 'Dr. Mohd. Momrezul Islam Milon', 'Pulmonology', 'বিকাল ২টা - ৬টা', 'Room 1001', 1),
    (13, 'Dr. Most. Firoza Parvin', 'Gynecology', 'সকাল ৯টা - ১টা', 'Room 1101', 1),
    (14, 'Dr. Mrs. Hazera Khatun (Sumi)', 'Obstetrics', 'বিকাল ৩টা - ৭টা', 'Room 1102', 1),
    (15, 'Dr. Muzakkir Rahman (Pias)', 'Oncology', 'সকাল ১০টা - ২টা', 'Room 1201', 0),
    (16, 'Dr. Nayema Akter Papiya', 'Nephrology', 'বিকাল ৪টা - ৮টা', 'Room 1301', 1),
    (17, 'Dr. Omar Farooque', 'Rheumatology', 'সকাল ৯টা - ১২টা', 'Room 1401', 1),
    (18, 'Dr. Sharmin Akter Shompa', 'Endocrinology', 'সকাল ১০টা - ১টা', 'Room 1501', 1)
]
cursor.executemany("INSERT OR IGNORE INTO doctors VALUES (?, ?, ?, ?, ?, ?)", doctors)

# Commit and close
conn.commit()
conn.close()

print("Database initialized and seeded successfully with Python sqlite3.")
