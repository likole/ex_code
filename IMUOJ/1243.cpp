#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	int i = 0;
	while (getline(cin, str))
	{
		while (str[i] != '\0')
		{
			if ((str[i] >= 'A'&&str[i] <= 'Z'))
			{
				str[i] = str[i] + 32;
				if (str[i] == 'z')
					str[i] = 'a';
				else if (str[i]<'z')
					str[i] = str[i] + 1;
			}
			else if (str[i] <= 'z'&&str[i] >= 'a')
			{
				if (str[i] >= 'a'&&str[i] <= 'c')
					str[i] = '2';
				if (str[i] >= 'd'&&str[i] <= 'f')
					str[i] = '3';
				if (str[i] >= 'g'&&str[i] <= 'i')
					str[i] = '4';
				if (str[i] >= 'j'&&str[i] <= 'l')
					str[i] = '5';
				if (str[i] >= 'm'&&str[i] <= 'o')
					str[i] = '6';
				if (str[i] >= 'p'&&str[i] <= 's')
					str[i] = '7';
				if (str[i] >= 't'&&str[i] <= 'v')
					str[i] = '8';
				if (str[i] >= 'w'&&str[i] <= 'z')
					str[i] = '9';
			}	i++;
		}
		cout << str << endl;
		i = 0;
	}
	return 0;
}
