#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	cin >> str;
	int count=0;
	for (int i = 0; i < str.length(); i++)
	{
		if ((str[i] >= 'a'&&str[i]<='z') || (str[i]>='A'&&str[i] <= 'Z')) count++;
	}
	cout << count << endl;
	//cin.get();
	//cin.get();
	return 0;
}