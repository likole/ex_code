#include<iostream>
#include<string>
using namespace std;
void reverse(string &);
int main()
{
	string str;
	cin >> str;
	reverse(str);
	cout << str << endl;
	//cin.get();
	//cin.get();
	return 0;
}
void reverse(string &str)
{
	int len = str.length();
	string tmp=str; 
	 for (int i = 0; i < len; i++)
	 {
		 str[i] = tmp[len - i - 1];
	 }
}