# Text-Summarizer

A web-based **Natural Language Processing (NLP)** application that automatically generates concise summaries from **plain text, PDF documents, and web URLs** using **BERT-based extractive summarization**.

The application supports multiple input sources, extracts textual content, performs preprocessing, and generates meaningful summaries while preserving the key information from the original content. It combines Python-based machine learning with a PHP web application to provide a simple and intuitive user experience.

---

## Overview

Text-Summarizer is designed to simplify the process of understanding lengthy documents by automatically producing concise summaries. The system supports direct text input, PDF document uploads, and website URL extraction, making it suitable for students, researchers, educators, and professionals.

The application leverages **BERT (Bidirectional Encoder Representations from Transformers)** to perform extractive summarization, enabling users to quickly obtain the most relevant information from large amounts of text.

---

## Features

- Automatic text summarization using BERT
- Plain text summarization
- PDF document summarization
- Website URL content extraction
- Multi-source input support
- Fast document processing
- Responsive web interface
- Extractive NLP summarization
- Clean and readable summary generation
- User feedback module
- Administrator dashboard

---

## Technology Stack

| Category | Technologies |
|----------|--------------|
| Programming Language | Python, PHP |
| Machine Learning | BERT Extractive Summarizer |
| NLP Libraries | Transformers, Summarizer |
| PDF Processing | PyMuPDF (fitz) |
| Web Scraping | BeautifulSoup4, urllib |
| Frontend | HTML5, CSS3, Bootstrap, JavaScript |
| Backend | PHP |
| Database | MySQL |
| Development Tools | Visual Studio Code, XAMPP, Git |

---

## System Workflow

```text
                    +-----------------------+
                    |       User Input      |
                    +-----------------------+
                     /         |           \
                    /          |            \
             Plain Text    PDF Document    Website URL
                    \          |            /
                     \         |           /
                    +-----------------------+
                    |   Text Extraction     |
                    +-----------------------+
                               |
                               ▼
                    +-----------------------+
                    |    Preprocessing      |
                    +-----------------------+
                               |
                               ▼
               +-----------------------------------+
               | BERT Extractive Summarization     |
               +-----------------------------------+
                               |
                               ▼
                    +-----------------------+
                    |   Generated Summary   |
                    +-----------------------+
```

---

## Core Functionalities

### Text Summarization

- Accepts plain text input.
- Generates concise summaries using BERT.
- Preserves the essential context of the original text.

### PDF Summarization

- Extracts text from uploaded PDF documents.
- Supports multi-page PDF files.
- Automatically summarizes extracted content.

### Website URL Summarization

- Retrieves textual content from websites.
- Extracts paragraph content using BeautifulSoup.
- Removes unnecessary HTML before processing.

### Summary Generation

- Produces readable extractive summaries.
- Reduces document length while preserving key information.
- Optimized for academic and professional documents.

### Administration

- Administrator dashboard
- User management
- Feedback management

---

## Project Structure

```text
Text-Summarizer/
│
├── assets/
│   ├── css/
│   ├── js/
│   ├── scss/
│   └── imgs/
│
├── dataset/
├── uploads/
│
├── extract_url.py
├── pdf_txt.py
├── test_bert.py
│
├── index.php
├── upload.php
├── output.php
├── register.php
├── admin_dashboard.php
├── connection.php
│
├── mtm_bert.sql
└── README.md
```

---

## Installation

### Prerequisites

- Python 3.9+
- PHP 8+
- MySQL
- Apache Server
- XAMPP (Recommended)

---

### Clone the Repository

```bash
git clone https://github.com/nelsonsebastian/Text-Summarizer.git
```

---

### Install Python Dependencies

```bash
pip install bert-extractive-summarizer
pip install transformers
pip install torch
pip install PyMuPDF
pip install beautifulsoup4
pip install requests
pip install nltk
pip install scikit-learn
```

Or install using the provided requirements file (if available):

```bash
pip install -r requirements.txt
```

---

### Configure the Project

1. Copy the project into the XAMPP `htdocs` directory.

```text
C:\xampp\htdocs\Text-Summarizer
```

2. Start:

- Apache
- MySQL

3. Create a MySQL database.

4. Import:

```
mtm_bert.sql
```

5. Configure the database connection in:

```text
connection.php
```

---

### Run the Application

Open your browser and navigate to:

```text
http://localhost/Text-Summarizer
```

---

## Software Engineering Practices

This project follows standard software engineering principles, including:

- Modular Application Architecture
- Object-Oriented Programming Concepts
- Software Development Life Cycle (SDLC)
- Separation of Frontend and Backend Logic
- Database Normalization
- Code Reusability
- Error Handling
- Debugging and Testing
- Maintainable Project Structure
- Documentation Best Practices

---

## Learning Outcomes

This project provided practical experience with:

- Natural Language Processing (NLP)
- BERT Transformer Models
- Machine Learning Integration
- Extractive Text Summarization
- Python Programming
- PDF Text Extraction
- Website Content Extraction
- PHP Web Development
- MySQL Database Design
- Client–Server Architecture
- Software Testing and Debugging

---

## Future Enhancements

- Large Language Model (LLM) based abstractive summarization
- Multi-language support
- User authentication and authorization
- Summary history
- Export summaries to PDF and DOCX
- REST API development
- Keyword extraction
- Named Entity Recognition (NER)
- AI-powered Question Answering
- Cloud deployment
- Docker containerization

---

## Screenshots

Add screenshots of the application here.

| Home Page | Summary Output |
|-----------|----------------|
| *Home Interface* | *Generated Summary* |

---

## Contributing

Contributions are welcome.

1. Fork the repository.
2. Create a feature branch.

```bash
git checkout -b feature/your-feature
```

3. Commit your changes.

```bash
git commit -m "Add new feature"
```

4. Push the branch.

```bash
git push origin feature/your-feature
```

5. Open a Pull Request.

---

## Author

**Nelson Sebastian**

Software Developer

- **GitHub:** https://github.com/nelsonsebastian
- **Repository:** https://github.com/nelsonsebastian/Text-Summarizer
- **LinkedIn:** https://linkedin.com/in/nelson-sebastian
- **Email:** nelsonsebastian2002@gmail.com

---

## License

© 2026 Nelson Sebastian. All rights reserved.

This repository is shared for portfolio and educational purposes. No part of this project may be copied, modified, distributed, or used commercially without prior written permission from the author.
