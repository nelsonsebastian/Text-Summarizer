import fitz  # PyMuPDF
import os

def pdf_to_text(pdf_file):
    # Create a PDF document object
    pdf_document = fitz.open(pdf_file)

    # Initialize a variable to store the text
    text = ""

    for page_number in range(pdf_document.page_count):
        page = pdf_document.load_page(page_number)
        text += page.get_text()

    # Close the PDF document
    pdf_document.close()

    return text

# Specify the path to your PDF file
pdf_file_path ="test.pdf"

# Extract text from the PDF
pdf_text = pdf_to_text(pdf_file_path)

# Print or save the extracted text
print(pdf_text)

# Optionally, save the extracted text to a text file
output_text_file = 'output.txt'
with open(output_text_file, 'w', encoding='utf-8') as text_file:
    text_file.write(pdf_text)

print(f'Text extracted and saved to {output_text_file}')
