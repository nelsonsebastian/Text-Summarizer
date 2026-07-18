
# coding: utf-8

# In[1]:


file=open("output.txt","r",encoding="UTF-8")
text=file.read()
file.close()


# In[2]:

#print("+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++")
#print(text)
#print("Length of original text:",len(text))

# In[3]:


from summarizer import Summarizer,TransformerSummarizer


# In[4]:


bert_model = Summarizer()


# In[5]:


txt=bert_model(text, min_length=60)
system_summary_bert = ''.join(txt)


# In[6]:

#print("**********")
print("SYTEM SUMMARY:",system_summary_bert)
#print("Length of summarized text:",len(system_summary_bert))


# In[7]:


#output_text_file = 'out1.txt'

# Assuming `system_summary_bert` contains the text you want to write

#with open(output_text_file, 'w', encoding='utf-8') as text_file:
    #text_file.write(system_summary_bert)


file=open("out1.txt","w",encoding="UTF-8")
file.write(system_summary_bert)
file.close()
