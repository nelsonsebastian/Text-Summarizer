# Text Summarization System

A web-based **Natural Language Processing (NLP)** application that automatically generates concise summaries from **plain text, PDF documents, and web URLs** using **BERT-based extractive summarization**. The application extracts textual content from multiple input sources, preprocesses the data, and produces meaningful summaries to help users quickly understand lengthy documents.

The project combines modern NLP techniques with a user-friendly web interface, providing an efficient solution for summarizing large volumes of textual information while maintaining the essential context of the original content.

---

## Overview

The Text Summarization System enables users to summarize content from various sources without manually reading lengthy documents. The application supports direct text input, PDF document processing, and web page extraction, making it suitable for academic, professional, and research purposes.

The summarization pipeline utilizes **BERT (Bidirectional Encoder Representations from Transformers)** to generate high-quality extractive summaries while preserving important information from the original text.

---

## Features

- Automatic text summarization using BERT
- PDF document summarization
- Website URL content extraction and summarization
- Plain text summarization
- Extractive NLP-based summarization
- Responsive web interface
- Fast document processing
- User-friendly workflow
- Multi-source input support
- Clean and readable summarized output

---

## Technology Stack

| Category | Technologies |
|----------|--------------|
| Programming Language | Python |
| Machine Learning | BERT Summarizer |
| NLP Libraries | Transformers, Summarizer |
| PDF Processing | PyMuPDF (fitz) |
| Web Scraping | BeautifulSoup4, urllib |
| Frontend | HTML5, CSS3, Bootstrap, JavaScript |
| Backend | PHP |
| Database | MySQL |
| Development Tools | Visual Studio Code, XAMPP |

---

## System Workflow

```
Input
│
├── Plain Text
├── PDF Document
└── Website URL
        │
        ▼
Text Extraction
        │
        ▼
Preprocessing
        │
        ▼
BERT Extractive Summarization
        │
        ▼
Generated Summary
```

---

## Core Functionalities

### Text Summarization
- Accepts raw textual input
- Generates concise summaries using BERT
- Preserves important contextual information

### PDF Processing
- Extracts text from PDF documents
- Supports multi-page PDFs
- Converts extracted content into summarized text

### URL Processing
- Retrieves textual content from web pages
- Extracts paragraph content using BeautifulSoup
- Removes unnecessary HTML elements before summarization

### Summary Generation
- Produces coherent extractive summaries
- Reduces document length while preserving meaning
- Optimized for readability

---

## Project Structure

```
Text-Summarization-System
│
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
│
├── uploads/
│
├── extract_url.py
├── pdf_txt.py
├── test_bert.py
├── index.php
├── upload.php
├── database/
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
git clone https://github.com/your-username/Text-Summarization-System.git
```

---

### Install Python Dependencies

```bash
pip install bert-extractive-summarizer
pip install transformers
pip install torch
pip install pymupdf
pip install beautifulsoup4
pip install urllib3
```

---

### Configure the Project

Move the project into your XAMPP `htdocs` directory.

```
C:\xampp\htdocs\Text-Summarization-System
```

Start:

- Apache
- MySQL

---

### Run the Application

Open your browser.

```
http://localhost/Text-Summarization-System
```

---

## Software Engineering Practices

The project follows standard software engineering principles, including:

- Modular application design
- Clean code practices
- Separation of frontend and backend logic
- Software Development Life Cycle (SDLC)
- Error handling and debugging
- Maintainable project architecture
- Code reusability
- Documentation

---

## Learning Outcomes

This project provided practical experience with:

- Natural Language Processing (NLP)
- Transformer Models
- BERT Extractive Summarization
- Machine Learning Integration
- PDF Text Extraction
- Web Content Scraping
- Python Automation
- PHP-Based Web Development
- Client–Server Architecture
- Software Testing and Debugging

---

## Future Enhancements

- Abstractive summarization using Large Language Models (LLMs)
- Multi-language summarization
- Document upload via drag-and-drop
- REST API integration
- User authentication
- Summary history
- Export summaries to PDF and DOCX
- Keyword extraction
- Named Entity Recognition (NER)
- AI-powered question answering

---

## Author

**Nelson Sebastian**

Software Developer

- **LinkedIn:** https://linkedin.com/in/nelson-sebastian
- **GitHub:** https://github.com/your-username

---

## License

This project is intended for educational and learning purposes.
